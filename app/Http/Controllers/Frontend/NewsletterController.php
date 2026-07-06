<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    /**
     * Subscribe (footer + newsletter section forms).
     */
    public function subscribe(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'email' => ['required', 'email', 'max:255'],
            'name' => ['nullable', 'string', 'max:255'],
        ]);

        $existing = Newsletter::query()->withTrashed()->where('email', $validated['email'])->first();

        if ($existing) {
            // Re-activate a previous subscription instead of failing on unique
            $existing->restore();
            $existing->forceFill([
                'status' => 1,
                'subscribed_at' => now(),
                'unsubscribed_at' => null,
            ])->save();
        } else {
            Newsletter::query()->create($validated + ['ip_address' => $request->ip()]);
        }

        return back()->with('newsletter_success', 'Thank you for subscribing to our newsletter!');
    }

    /**
     * One-click unsubscribe via emailed token.
     */
    public function unsubscribe(string $token): RedirectResponse
    {
        $subscriber = Newsletter::query()->where('token', $token)->first();

        $subscriber?->unsubscribe();

        return redirect()
            ->route('frontend.home')
            ->with('newsletter_success', $subscriber ? 'You have been unsubscribed.' : 'Subscription not found.');
    }
}
