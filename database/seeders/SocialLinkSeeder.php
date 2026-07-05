<?php

namespace Database\Seeders;

use App\Models\SocialLink;
use Illuminate\Database\Seeder;

class SocialLinkSeeder extends Seeder
{
    public function run(): void
    {
        $links = [
            ['platform' => 'facebook', 'url' => 'https://facebook.com/alliedbusiness', 'icon' => 'bi-facebook', 'sort_order' => 1],
            ['platform' => 'twitter', 'url' => 'https://twitter.com/alliedbusiness', 'icon' => 'bi-twitter-x', 'sort_order' => 2],
            ['platform' => 'linkedin', 'url' => 'https://linkedin.com/company/alliedbusiness', 'icon' => 'bi-linkedin', 'sort_order' => 3],
            ['platform' => 'instagram', 'url' => 'https://instagram.com/alliedbusiness', 'icon' => 'bi-instagram', 'sort_order' => 4],
            ['platform' => 'youtube', 'url' => 'https://youtube.com/@alliedbusiness', 'icon' => 'bi-youtube', 'sort_order' => 5],
        ];

        foreach ($links as $link) {
            SocialLink::query()->updateOrCreate(
                ['platform' => $link['platform']],
                $link + ['status' => 1]
            );
        }
    }
}
