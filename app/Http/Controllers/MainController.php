<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function receive(Request $request)
	{
	        $data = $request->all();
	        //get the user’s id
	        $id = $data["entry"][0]["messaging"][0]["sender"]["id"];
	     	$this->sendTextMessage($id, "Hello");

	}
	private function sendTextMessage($recipientId, $messageText)
    {
        $messageData = [
            "recipient" => [
                "id" => $recipientId
            ],
            "message" => [
                "text" => $messageText
            ]
        ];
        $ch = curl_init('https://graph.facebook.com/v4.0/me/messages?access_token=EAAOUraXZAo4IBALyYDOjWLfsMWhTOcbPOnUtphaR9EgtW8eo9ZCkTDS3GOFpYp4ZCuFxPt7ckdlbroxXeOSl7ZAfZC4IkgBN4VV2ZBZAYi51uwNaurQzv0bjoZAEnOFSpZCZBlhNyZB7L4HlXZCsJYvAd6t1oNumyOo17ZAp9oZB3o4dd5XQZDZD');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($messageData));
        curl_exec($ch);

        exit();
    
	}
}
