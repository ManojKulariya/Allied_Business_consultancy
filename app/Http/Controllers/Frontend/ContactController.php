<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\ContactRequest;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\HomeSection;
use App\Models\Service;
use App\Models\WhyChooseItem;
use App\Notifications\ContactConfirmation;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    /**
     * FAQ categories shown on the Contact page (a topical subset of the
     * global FAQ module — same model/admin screen as the homepage FAQ).
     */
    private const FAQ_CATEGORIES = [
        'Business Registration', 'GST', 'Income Tax', 'Trademark', 'Accounting', 'Compliance',
    ];

    public function index(): View
    {
        return view('frontend.pages.contact', [
            'whyChooseItems' => WhyChooseItem::query()->active()->ordered()->get(),
            'faqs' => Faq::query()->active()->whereIn('category', self::FAQ_CATEGORIES)->ordered()->get(),
            'services' => Service::query()->active()->orderBy('title')->get(['id', 'title']),
            'newsletterSection' => HomeSection::query()->where('section_key', 'newsletter')->first(),
        ]);
    }

    public function store(ContactRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $contact = Contact::query()->create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'company_name' => $validated['company_name'] ?? null,
            'service_interested' => $validated['service_interested'] ?? null,
            'subject' => $validated['service_interested'] ?? null,
            'message' => $validated['message'],
            'ip_address' => $request->ip(),
            'user_agent' => (string) $request->userAgent(),
        ]);

        try {
            Notification::route('mail', $contact->email)->notify(new ContactConfirmation($contact));
        } catch (\Throwable $e) {
            report($e);
        }

        return back()->with('contact_success', "Thank you, {$contact->name}! Your message has been sent — our team will get back to you within one business day.");
    }
}
