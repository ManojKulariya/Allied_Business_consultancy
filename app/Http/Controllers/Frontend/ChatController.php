<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\ChatLeadRequest;
use App\Http\Requests\Frontend\ChatMessageRequest;
use App\Models\Contact;
use App\Notifications\ContactConfirmation;
use App\Services\Chat\ChatbotService;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Notification;

class ChatController extends Controller
{
    public function __construct(private readonly ChatbotService $chatbot)
    {
    }

    public function message(ChatMessageRequest $request): JsonResponse
    {
        $validated = $request->validated();

        $result = $this->chatbot->respond($validated['history'] ?? [], $validated['message']);

        return response()->json($result);
    }

    public function lead(ChatLeadRequest $request): JsonResponse
    {
        $validated = $request->validated();

        $contact = Contact::query()->create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'service_interested' => $validated['service_interested'] ?? null,
            'subject' => $validated['service_interested'] ?? 'Chat enquiry',
            'message' => $validated['message'],
            'source' => 'chatbot',
            'ip_address' => $request->ip(),
            'user_agent' => (string) $request->userAgent(),
        ]);

        try {
            Notification::route('mail', $contact->email)->notify(new ContactConfirmation($contact));
        } catch (\Throwable $e) {
            report($e);
        }

        return response()->json([
            'success' => true,
            'message' => "Thank you, {$contact->name}! Our team will get back to you within one business day.",
        ]);
    }
}
