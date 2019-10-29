<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('welcome');
    }

    public function index()
    {
        return view('master.assignments');
    }
}
