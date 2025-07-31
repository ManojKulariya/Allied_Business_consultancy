<?php

namespace App\Helpers;

use Google_Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class FirebaseHelper
{
   public static function sendNotification($title, $body, $tokens = [])
    {
        // Setup Google Client with service account
        $client = new Google_Client();
        $client->setAuthConfig(storage_path('app/firebase/firebase-credentials.json'));
        $client->addScope('https://www.googleapis.com/auth/firebase.messaging');
        $client->useApplicationDefaultCredentials();
        $accessToken = $client->fetchAccessTokenWithAssertion()['access_token'];

        // Firebase project ID
        $projectId = 'notification-84b9d';
        $url = "https://fcm.googleapis.com/v1/projects/{$projectId}/messages:send";

        // If no token passed, send to all from DB
        if (empty($tokens)) {
            $tokens = \App\Models\FCMToken::pluck('token')->toArray();
        }

        foreach ($tokens as $token) {
            $payload = [
                "message" => [
                    "token" => $token,
                    "notification" => [
                        "title" => $title,
                        "body" => $body,
                    ]
                ]
            ];

            Http::withToken($accessToken)->post($url, $payload);
        }

        return true;
    }
}
