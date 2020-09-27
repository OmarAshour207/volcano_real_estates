<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

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

        Cache::get('lang') == '' ? Cache::put('lang', 'ar', Carbon::tomorrow()) : '';
        $lang = Cache::get('lang');

        if ($message == __('bot.' . $lang . '.main_menu')) {
            $response = $this->mainMenu($id, $user);
        } elseif($message == __('bot.' . $lang . '.visit_website')) {
            $response = $this->visitWebsite($id);
        } elseif ($message == 'ar' || $message == 'en') {
            $response = $this->switchLang($id, $message, $user);
        } elseif ($message == __('bot.' . $lang . '.properties')) {
            $response = $this->showProperties($id, 1);
        } elseif ($message == __('bot.' . $lang . '.villa')) {
            $response = $this->showProperties($id, 2);
        } elseif ($message == __('bot.' . $lang . '.chalet')) {
            $response = $this->showProperties($id, 3);
        } else {
            $response = $this->mainMenu($id, $user);
        }

        $this->sendMessage($response);
    }

    public function switchLang($id, $message, $user)
    {
        Cache::put('lang', $message, Carbon::tomorrow());
        return $this->mainMenu($id, $user);
    }

    public function mainMenu($id, $user)
    {
        $lang = Cache::get('lang');
        return [
            'recipient' => ['id' => $id ],
            'messaging_type' => 'RESPONSE',
            'message'  => [
                'text' => __('bot.' . $lang . '.welcome') . $user->first_name,
                'quick_replies' => [
                    [
                        "content_type" => "text",
                        "title" => __('bot.' . $lang . '.properties'),
                        "payload" => "http://monraytravel.com?type=1"
                    ], [
                        "content_type" => "text",
                        "title" => __('bot.' . $lang . '.villa'),
                        "payload" => "http://monraytravel.com?type=2"
                    ], [
                        "content_type" => "text",
                        "title" => __('bot.' . $lang . '.chalet'),
                        "payload" => "http://monraytravel.com?type=3"
                    ], [
                        "content_type" => "text",
                        "title" => __('ar'),
                        "payload" => "http://monraytravel.com/lang/ar"
                    ], [
                        "content_type" => "text",
                        "title" => __('en'),
                        "payload" => "http://monraytravel.com/lang/en"
                    ], [
                        "content_type" => "text",
                        "title" => __('bot.' . $lang . '.visit_website'),
                        "payload" => "http://monraytravel.com"
                    ]
                ]
            ]
        ];
    }

    public function visitWebsite($id)
    {
        $lang = Cache::get('lang');
        return [
            'recipient' => ['id' => $id ],
            'message'  => [
                'attachment' => [
                    'type'  => 'template',
                    'payload' => [
                        'template_type' => 'generic',
                        'elements'  => [
                            [
                                'title'     => __('bot.' . $lang . '.welcome'),
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
                                        'title' => __('bot.' . $lang . '.visit_website')
                                    ], [
                                        'type'  => 'postback',
                                        'payload'   => __('bot.' . $lang . '.main_menu'),
                                        'title' => __('bot.' . $lang . '.main_menu')
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ];
    }

    public function showProperties($id, $type)
    {
        $lang = Cache::get('lang');
        $properties = Property::where('type', $type)->limit(7)->get()->toArray();

        $temp = [];
        for ($i = 0; $i < count($properties); $i++) {
            array_push($temp,
                [
                    'title' => $properties[$i][$lang. '_name'],
                    'subtitle' => $properties[$i][$lang .'_description'],
                    "image_url" => "https://image.shutterstock.com/image-vector/coffee-cup-icon-vector-symbol-600w-1082019227.jpg",
                    'default_action' => [
                        "type" => "web_url",
                        "url" => "https://91a105edf6b8.ngrok.io/",
                        "webview_height_ratio" => "tall"
                    ],
                    'buttons' => [
                        [
                            "type" => "web_url",
                            "url" => "http://moonraytravel.com/{$properties[$i]['id']}/{$properties[$i][$lang . '_name']}",
                            "title" => __('bot.'. $lang . '.view_details'),
                        ], [
                            "type" => "postback",
                            "payload" => __('bot.'. $lang .'.main_menu'),
                            "title" => __('bot.'. $lang .'.main_menu'),
                        ]
                    ]
                ]);
        }

        return
            [
                'recipient' => ['id' => $id ],
                'message' => [
                    'attachment' => [
                        'type' => 'template',
                        'payload' => [
                            'template_type' => 'generic',
                            'elements' => $temp,
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
