<?php

namespace App\Notifications;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactConfirmation extends Notification
{
    use Queueable;

    public function __construct(public readonly Contact $contact)
    {
    }

    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        $siteName = setting('site_name', config('app.name'));

        return (new MailMessage)
            ->subject("We've received your message — {$siteName}")
            ->greeting("Thank you, {$this->contact->name}!")
            ->line("We've received your enquiry and one of our advisors will get back to you within one business day.")
            ->line('**Your message:**')
            ->line(str($this->contact->message)->limit(400))
            ->line('In the meantime, feel free to call us directly if your query is urgent.')
            ->action('Call '.setting('contact_phone', ''), 'tel:'.preg_replace('/[^0-9+]/', '', (string) setting('contact_phone')))
            ->salutation("— {$siteName}");
    }
}
