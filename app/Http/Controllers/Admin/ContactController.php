<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Services\Admin\ContactService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function __construct(private readonly ContactService $service)
    {
    }

    public function index(Request $request): View
    {
        return view('admin.contacts.index', [
            'items' => $this->service->list($request),
        ]);
    }

    public function show(int $id): View
    {
        $contact = $this->service->findOrFail($id);
        $contact->markAsRead();

        return view('admin.contacts.show', ['contact' => $contact]);
    }

    public function destroy(int $id): RedirectResponse
    {
        $this->service->delete($this->service->findOrFail($id));

        return redirect()->route('admin.contacts.index')->with('success', 'Enquiry moved to trash.');
    }

    public function restore(int $id): RedirectResponse
    {
        $this->service->restore($id);

        return back()->with('success', 'Enquiry restored successfully.');
    }

    public function forceDelete(int $id): RedirectResponse
    {
        $this->service->forceDelete($id);

        return back()->with('success', 'Enquiry permanently deleted.');
    }

    public function bulkDelete(Request $request): JsonResponse
    {
        $ids = array_filter((array) $request->input('ids', []), 'is_numeric');

        abort_if(empty($ids), 422, 'No records selected.');

        $count = $this->service->bulkDelete($ids);

        return response()->json([
            'success' => true,
            'message' => "{$count} enquiry(ies) moved to trash.",
        ]);
    }

    public function markRead(int $id): RedirectResponse
    {
        $this->service->findOrFail($id)->markAsRead();

        return back()->with('success', 'Marked as read.');
    }

    public function markUnread(int $id): RedirectResponse
    {
        $this->service->findOrFail($id)->markAsUnread();

        // Redirect to the index, not back() — the show page itself marks
        // the enquiry read on every GET, which would instantly undo this.
        return redirect()->route('admin.contacts.index')->with('success', 'Marked as unread.');
    }

    public function updateReplyStatus(Request $request, int $id): RedirectResponse
    {
        $validated = $request->validate([
            'reply_status' => ['required', 'in:pending,replied'],
        ]);

        $this->service->findOrFail($id)->update($validated);

        return back()->with('success', 'Reply status updated.');
    }

    public function exportCsv(Request $request): \Symfony\Component\HttpFoundation\StreamedResponse
    {
        $contacts = $this->exportQuery($request);

        return Response::streamDownload(function () use ($contacts) {
            $handle = fopen('php://output', 'w');
            fputcsv($handle, $this->exportHeadings());

            $contacts->each(fn (Contact $contact) => fputcsv($handle, $this->exportRow($contact)));

            fclose($handle);
        }, 'contact-enquiries-'.now()->format('Y-m-d').'.csv', ['Content-Type' => 'text/csv']);
    }

    /**
     * Excel-compatible export via an HTML table saved with an .xls
     * extension — Excel opens this natively, no extra package required.
     */
    public function exportExcel(Request $request): \Symfony\Component\HttpFoundation\StreamedResponse
    {
        $contacts = $this->exportQuery($request);
        $headings = $this->exportHeadings();

        return Response::streamDownload(function () use ($contacts, $headings) {
            echo '<table border="1"><thead><tr>';
            foreach ($headings as $heading) {
                echo '<th>'.e($heading).'</th>';
            }
            echo '</tr></thead><tbody>';

            foreach ($contacts as $contact) {
                echo '<tr>';
                foreach ($this->exportRow($contact) as $cell) {
                    echo '<td>'.e($cell).'</td>';
                }
                echo '</tr>';
            }

            echo '</tbody></table>';
        }, 'contact-enquiries-'.now()->format('Y-m-d').'.xls', ['Content-Type' => 'application/vnd.ms-excel']);
    }

    private function exportQuery(Request $request): \Illuminate\Support\Collection
    {
        return $this->service->list($request, PHP_INT_MAX)->getCollection();
    }

    private function exportHeadings(): array
    {
        return ['ID', 'Name', 'Email', 'Phone', 'Company', 'Service Interested', 'Message', 'Read', 'Reply Status', 'Submitted At'];
    }

    private function exportRow(Contact $contact): array
    {
        return [
            $contact->id,
            $contact->name,
            $contact->email,
            $contact->phone,
            $contact->company_name,
            $contact->service_interested,
            $contact->message,
            $contact->is_read ? 'Read' : 'Unread',
            ucfirst($contact->reply_status),
            $contact->created_at?->format('Y-m-d H:i'),
        ];
    }
}
