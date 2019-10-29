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
}
