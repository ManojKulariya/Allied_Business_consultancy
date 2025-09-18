<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Models\ContactMessage;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function contactSubmit(Request $request)
    {
        // Process contact form submission
        
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'user_message' => 'required|string|max:1000',
        ]);

        if ($validator->fails()) {
            // Validation failed
            // Store validation errors in session flash data
            session()->flash('error', 'Please correct the errors in the form.');
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Get form data
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'user_message' => $request->user_message,
            'submitted_at' => now(),
        ];
        
        // Form data processed
        
        try {
            // Save message to database
            $contactMessage = ContactMessage::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'subject' => $data['subject'],
                'message' => $data['user_message'],
                'is_read' => false
            ]);
            
            // Message saved to database

            // Try to send email (optional - will work if mail is configured)
            try {
                Mail::send('emails.contact', $data, function ($mail) use ($data) {
                    $mail->to('Alliedbusinessconsultancy@gmail.com')
                        ->subject('New Contact Form Submission: ' . $data['subject'])
                        ->from($data['email'], $data['name']);
                });
            } catch (\Exception $mailError) {
                // Email failed but message is saved in database
                \Log::warning('Contact form email failed: ' . $mailError->getMessage());
            }

            // Set success message and redirect
            // Force session data to be saved before redirecting
            session()->flash('success', 'Thank you for your message! We have received your inquiry and will get back to you soon.');
            return redirect()->back();
        } catch (\Exception $e) {
            // Handle error
            \Log::error('Contact form save failed: ' . $e->getMessage());
            
            // Force session data to be saved before redirecting
            session()->flash('error', 'Sorry, there was an error saving your message. Please try again later.');
            return redirect()->back()->withInput();
        }
    }
}
