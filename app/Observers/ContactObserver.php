<?php

namespace App\Observers;

use App\Models\Contact;
use App\Notifications\NewContactMessage;
use App\Support\NotifiesAdmins;

class ContactObserver
{
    use NotifiesAdmins;

    public function created(Contact $contact): void
    {
        $this->notifyAdmins(new NewContactMessage($contact), 'contacts.view');
    }
}
