<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id= Auth::id();

        $school = Form::where('applicant_id', $user_id)->pluck('school')->first();
        $tests = Form::where('school', $school)->where('exam_id', 2)->get();
        

        return view('home');
    }
}
