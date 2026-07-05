<?php

namespace App\Notifications;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewContactMessage extends Notification
{
    use Queueable;

    public function __construct(public readonly Contact $contact)
    {
    }

    public function via(object $notifiable): array
    {
        // Email only when SMTP is configured (Settings → SMTP / Mail)
        return setting('mail_host') ? ['database', 'mail'] : ['database'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('New Contact Message — '.setting('site_name', config('app.name')))
            ->greeting('New contact enquiry received')
            ->line("**From:** {$this->contact->name} ({$this->contact->email})")
            ->line('**Subject:** '.($this->contact->subject ?: '—'))
            ->line('**Message:**')
            ->line(str($this->contact->message)->limit(400))
            ->action('View Message', safe_route('admin.contacts.show', $this->contact->id))
            ->salutation('— '.setting('site_name', config('app.name')));
    }

    public function toDatabase(object $notifiable): array
    {
        return [
            'icon' => 'bi-envelope-exclamation',
            'color' => 'danger',
            'title' => 'New contact message',
            'message' => "{$this->contact->name}: ".str($this->contact->subject ?: $this->contact->message)->limit(60),
            'url' => safe_route('admin.contacts.show', $this->contact->id),
        ];
    }
}
