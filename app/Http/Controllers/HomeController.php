<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Form;
use App\Answer;
use App\Institution;
use App\Question;

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
        $institution_id = Institution::where('manager_id', $user_id)->pluck('id')->first();
        $forms_qty = Form::where('institution_id',$institution_id)->count();

        $forms = Form::where('institution_id',$institution_id)->get();
        $questions = Question::get();

        return view('home',['forms'=>$forms,
                            'institution_id'=>$institution_id,
                            'questions'=>$questions,
                            'forms_qty'=>$forms_qty
                          ]);
    }
}
