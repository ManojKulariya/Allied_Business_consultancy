<?php

namespace App\Http\Controllers;
use App\Helpers\FirebaseHelper;
use Illuminate\Http\Request;
use Google_Client;
use Illuminate\Support\Facades\Http;
use App\Models\FCMToken;
use Illuminate\Support\Facades\DB;


class FCMController extends Controller
{
public function storeToken(Request $request)
{
    $token = $request->input('token');

    if (!$token) {
        return response()->json(['error' => 'Token missing'], 400);
    }

    // Save/update token
    DB::table('fcm_tokens')->updateOrInsert(
        ['token' => $token],
        ['updated_at' => now()]
    );

    // $this->sendNotification($token);
    FirebaseHelper::sendNotification("Hello Dear 😊", "Welcome! This is a test notification from Manoj Choudhary", [$token]);

    return response()->json(['success' => true]);
}


    /**
     * Send push notification to all stored FCM tokens
     */
   public function sendNotification($token = null)
    {
        $client = new Google_Client();
        $client->setAuthConfig(storage_path('app/firebase/firebase-credentials.json'));
        $client->addScope('https://www.googleapis.com/auth/firebase.messaging');
        $client->useApplicationDefaultCredentials();

        $accessToken = $client->fetchAccessTokenWithAssertion()['access_token'];
        $projectId = 'notification-84b9d';
        $url = "https://fcm.googleapis.com/v1/projects/{$projectId}/messages:send";

        $tokens = $token ? [$token] : FCMToken::pluck('token')->toArray();

        foreach ($tokens as $deviceToken) {
            $payload = [
                "message" => [
                    "token" => $deviceToken,
                    "notification" => [
                        "title" => "Hello Dear 😊",
                        "body" => "Welcome! This is a test notification from Manoj Choudhary"
                    ]
                ]
            ];

            Http::withToken($accessToken)->post($url, $payload);
        }

        return response()->json([
            "success" => true,
            "message" => "Notification sent.",
            "token_count" => count($tokens)
        ]);
    }
    // public function sendNotification()
    // {
    //     $deviceToken = 'cXaODCQumW0Xdxl1u5Pv1D:APA91bHt15L0bzwenMmELZjv9Vuqs82LAQxK1EBAYilqgi8JwFj9H05c3S6gsqv8v3NeqMsXRn0s6cXl--h9KF8lGq5HObpXIwy5kOJOCaLo9cNsiIyGufs'; // from your mobile app

    //     // Load Firebase Credentials
    //     $client = new \Google_Client();
    //     $client->setAuthConfig(storage_path('app/firebase/firebase-credentials.json'));
    //     $client->addScope('https://www.googleapis.com/auth/firebase.messaging');
    //     $client->useApplicationDefaultCredentials();

    //     $accessToken = $client->fetchAccessTokenWithAssertion()["access_token"];

    //     $projectId = 'notification-84b9d'; // your Firebase project ID
    //     $url = "https://fcm.googleapis.com/v1/projects/{$projectId}/messages:send";

    //     $payload = [
    //         "message" => [
    //             "token" => $deviceToken,
    //             "notification" => [
    //                 "title" => "Hello Dear",
    //                 "body" => "This is a test push notification from Manoj Choudhary"
    //             ]
    //         ]
    //     ];

    //     $response = Http::withToken($accessToken)
    //         ->post($url, $payload);

    //     return response()->json([
    //         "status" => $response->status(),
    //         "body" => $response->json(),
    //     ]);
    // }
}
