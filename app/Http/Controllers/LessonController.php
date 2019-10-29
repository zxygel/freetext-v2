<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Lesson;
use Auth;

class LessonController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('welcome');
    }

    public function index()
    {
    	$lessons = DB::table('lessons')->where('deleted_at', NULL)->orderBy('created_at', 'desc')->paginate(5);
        return view('master.lessons',['lessons' => $lessons]);
    }

    public function form()
    {
    	return view('master.lessonsform');
    }

    public function view(Request $request)
    {
    	$lessons = Lesson::find($request->id);
    	return view('master.lessonsform',['lesson' => $lessons]);
    }

    public function create(Request $request)
    {
    	$request->validate([
    		'title' => 'required',
    		'content' => 'required',
    	]);

    	$lesson = new Lesson;
    	$lesson->title = $request->title;
    	$lesson->content = $request->content;
    	// $lesson->featured_image = '';
    	$lesson->user_id = Auth::id();
    	$lesson->save();

    	\Session::flash('flash_message','Successfully saved.');

    	return back()->withInput();
    }

    public function update(Request $request)
    {
    	$request->validate([
    		'title' => 'required',
    		'content' => 'required',
    		'id' => 'required'
    	]);
    	$lesson = Lesson::find($request->id);
    	$lesson->title = $request->title;
    	$lesson->content = $request->content;
		$lesson->user_id = Auth::id();
    	$lesson->save();

    	\Session::flash('flash_message','Successfully updated.');

    	return back()->withInput();
    }

    public function delete(Request $request)
    {
    	$lesson = Lesson::find($request->id);
    	$lesson->delete();

    	\Session::flash('flash_message','Successfully deleted.');

    	return back()->withInput();
    }
}
