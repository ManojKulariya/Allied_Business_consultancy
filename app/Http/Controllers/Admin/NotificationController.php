<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NotificationController extends Controller
{
    /**
     * Notification center — all notifications, paginated.
     */
    public function index(Request $request): View
    {
        return view('admin.notifications.index', [
            'notifications' => $request->user()
                ->notifications()
                ->paginate(20),
        ]);
    }

    /**
     * Mark one notification read and follow its URL.
     */
    public function read(Request $request, string $id): RedirectResponse
    {
        $notification = $request->user()->notifications()->findOrFail($id);
        $notification->markAsRead();

        $url = $notification->data['url'] ?? null;

        return ($url && $url !== '#')
            ? redirect($url)
            : back();
    }

    /**
     * Mark all notifications read.
     */
    public function readAll(Request $request): JsonResponse|RedirectResponse
    {
        $request->user()->unreadNotifications->markAsRead();

        if ($request->expectsJson()) {
            return response()->json(['success' => true, 'message' => 'All notifications marked read.']);
        }

        return back()->with('success', 'All notifications marked as read.');
    }

    /**
     * Delete one notification.
     */
    public function destroy(Request $request, string $id): RedirectResponse
    {
        $request->user()->notifications()->findOrFail($id)->delete();

        return back()->with('success', 'Notification removed.');
    }
}
