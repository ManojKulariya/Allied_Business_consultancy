<?php

namespace App\Notifications;

use App\Models\JobApplication;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewJobApplication extends Notification
{
    use Queueable;

    public function __construct(public readonly JobApplication $application)
    {
    }

    public function via(object $notifiable): array
    {
        return setting('mail_host') ? ['database', 'mail'] : ['database'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('New Job Application — '.($this->application->career?->title ?? 'Unknown position'))
            ->greeting('New job application received')
            ->line("**Applicant:** {$this->application->name} ({$this->application->email})")
            ->line('**Position:** '.($this->application->career?->title ?? '—'))
            ->line('**Phone:** '.$this->application->phone)
            ->action('Review Application', safe_route('admin.job-applications.show', $this->application->id))
            ->salutation('— '.setting('site_name', config('app.name')));
    }

    public function toDatabase(object $notifiable): array
    {
        return [
            'icon' => 'bi-file-person',
            'color' => 'primary',
            'title' => 'New job application',
            'message' => "{$this->application->name} applied for ".($this->application->career?->title ?? 'a position'),
            'url' => safe_route('admin.job-applications.show', $this->application->id),
        ];
    }
}
