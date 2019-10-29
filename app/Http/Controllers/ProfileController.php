<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\User;
use App\Profile;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('welcome');
    }

    public function index()
    {
    	$user = User::find(Auth::id());
    	$profile = $user->profile;
    	if ($profile) {
    		return view('user.profile',['user' => $user,'profile' => $profile]);
    	}
    	return view('user.profileform');
    }

    public function form(Request $request)
    {
    	$user = User::find($request->id);
    	$profile = Profile::where('user_id', $user->id)->first();
    	return view('user.profileform',['user' => $user,'profile' => $profile]);
    }

    public function update(Request $request)
    {
    	$request->validate([
    		'gender' => 'required|in:Female,Male',
    		'birthdate' => 'required|date',
    		'contact' => 'required|numeric',
    		'address' => 'required',
    	]);
    	$profile = Profile::where('user_id',Auth::id())->first();
    	if ($profile === null) {
    		$profile = new Profile;
    		$profile->gender = $request->gender;
    		$profile->birthdate = $request->birthdate;
    		$profile->contact = $request->contact;
    		$profile->address = $request->address;
    		$profile->user_id = Auth::id();
    	}else{
    		$profile->gender = $request->gender;
    		$profile->birthdate = $request->birthdate;
    		$profile->contact = $request->contact;
    		$profile->address = $request->address;
    	}
    	$profile->save();
    	\Session::flash('flash_message','Successfully saved.');
    	return back()->withInput();
    }
}
