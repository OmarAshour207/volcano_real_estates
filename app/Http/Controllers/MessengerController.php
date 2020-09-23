<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessengerController extends Controller
{
    public function index()
    {
        $this->verifyAccess();

        $input = json_decode(file_get_contents('php://input'), true);

        $id 	 = $input['entry'][0]['messaging'][0]['sender']['id'];
        $message = '';

        if (isset($input['entry'][0]['messaging'][0]['postback']['payload'])) {
            $message = $input['entry'][0]['messaging'][0]['postback']['payload'];
        } else {
            $message = $input['entry'][0]['messaging'][0]['message']['text'];
        }
        $user    = json_decode($this->getUser($id));

        if ($message == 'main_menu') {
            $response = $this->mainMenu($id, $user);
        } elseif($message == 'visit-website') {
            $response = $this->visitWebsite($id);
        } else {
            $response = $this->mainMenu($id, $user);
        }

        $this->sendMessage($response);
    }

    public function mainMenu($id, $user)
    {
        return [
            'recipient' => ['id' => $id ],
            'messaging_type' => 'RESPONSE',
            'message'  => [
                'text' => "Welcome {$user->first_name}",
                'quick_replies' => [
                    [
                        "content_type" => "text",
                        "title" => "properties",
                        "payload" => "http://monraytravel.com/appointments"
                    ], [
                        "content_type" => "text",
                        "title" => "villa",
                        "payload" => "http://monraytravel.com/appointments"
                    ], [
                        "content_type" => "text",
                        "title" => "chalet",
                        "payload" => "http://monraytravel.com/appointments"
                    ], [
                        "content_type" => "text",
                        "title" => "visit-website",
                        "payload" => "http://monraytravel.com/appointments"
                    ]
                ]
            ]
        ];
    }

    public function visitWebsite($id)
    {
        return [
            'recipient' => ['id' => $id ],
            'message'  => [
                'attachment' => [
                    'type'  => 'template',
                    'payload' => [
                        'template_type' => 'generic',
                        'elements'  => [
                            [
                                'title'     => 'Welcome',
                                'image_url' => 'https://petersfancybrownhats.com/company_image.png',
                                'subtitle'  => 'Hello for everyone',
                                'default_action' => [
                                    'type' => 'web_url',
                                    'url'   => 'http://monraytravel.com',
                                    'webview_height_ratio'  => 'tall'
                                ], 'buttons'    => [
                                    [
                                        'type'  => 'web_url',
                                        'url'   => 'http://monraytravel.com',
                                        'title' => 'visit-website'
                                    ], [
                                        'type'  => 'postback',
                                        'payload'   => 'main_menu',
                                        'title' => 'Main Menu'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ];
    }

    protected function getUser($id = null)
    {
        $url = "https://graph.facebook.com/v8.0/{$id}?fields=first_name,last_name,profile_pic&access_token=" . setting('facebook_token');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $user = curl_exec($ch);
        curl_close($ch);

        return $user;
    }

    protected function sendMessage($response)
    {
        // set our post
        $ch = curl_init('https://graph.facebook.com/v8.0/me/messages?access_token=' . setting('facebook_token'));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($response));
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_exec($ch);
        curl_close($ch);
    }

    protected function verifyAccess()
    {
        $localToken = env('FACEBOOK_MESSENGER_WEBHOOK_TOKEN');
        $hubVerifyToken = request('hub_verify_token');

        if ($localToken == $hubVerifyToken) {
            echo request('hub_challenge');
            exit;
        }
    }
}
