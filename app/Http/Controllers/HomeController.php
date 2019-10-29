<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Storage;
use Auth;
use App\User;
use App\Profile;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('welcome');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $profile = Profile::where('user_id',Auth::id())->first() ?? false;
    //     if ($profile) {
    //         return view('home.dashboard');
    //     }
    //     return view('user.profileform');
    // }

    public function welcome()
    {
        $id = Auth::id() ?? false;
        $message = new App\Message;
            $message->data = reponse()->json($data);
            $message->save();
        if ($id) {
            $user = User::find($id)->profile ?? null;
            if (is_null($user)) {
                return view('home.welcome');
            }
            return view('user.profileform',['profile' => false]);
        }
        return view('home.welcome');
            
    }
}
