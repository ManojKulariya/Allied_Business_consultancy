<?php

namespace App\Observers;

use App\Models\SocialLink;
use Illuminate\Support\Facades\Cache;

class SocialLinkObserver
{
    public function saved(SocialLink $socialLink): void
    {
        Cache::forget('social_links.active');
    }

    public function deleted(SocialLink $socialLink): void
    {
        Cache::forget('social_links.active');
    }
}
