<?php

namespace App\Observers;

use App\Models\JobApplication;
use App\Notifications\NewJobApplication;
use App\Support\NotifiesAdmins;

class JobApplicationObserver
{
    use NotifiesAdmins;

    public function created(JobApplication $application): void
    {
        $this->notifyAdmins(new NewJobApplication($application), 'careers.view');
    }
}
