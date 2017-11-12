<?php

namespace App\Http\Controllers\Forms;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Form;
use App\Answer;

class FormsController extends Controller
{
    public function __contruct() {

    }
    public function index()
    {
        return view('forms.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         $form = new Form;
         if($request->_exam_type == 'director') {
              $form->applicant_id = Auth::id();
              $form->exam_id = 1;
              $form->applicant_id = Auth::id();
              if($form->save()) {
                   $this->saveDirectorTextAnswers($request,$form->id);
                   $this->saveDirectorSelectAnswers($request,$form->id);
                   return redirect('/forms');
              } else {
                   return view('forms.index');
              }
         } else {
              $form->exam_id = 2;
              $form->applicant_id = Auth::id();
         }

    }
    public function saveDirectorTextAnswers($request, $form_id) {
         $answer = new Answer;
         $answer->question_id = 1;
         $answer->form_id = $form_id;
         $answer->description = $request->school_name;
         $answer->save();
         $answer = new Answer;
         $answer->question_id = 2;
         $answer->form_id = $form_id;
         $answer->description = $request->school_type;
         $answer->save();
         $answer = new Answer;
         $answer->question_id = 3;
         $answer->form_id = $form_id;
         $answer->description = $request->teachers_qty;
         $answer->save();
         $answer = new Answer;
         $answer->question_id = 4;
         $answer->form_id = $form_id;
         $answer->description = $request->student_qty;
         $answer->save();
    }
     public function saveDirectorSelectAnswers($request, $form_id) {
         $answer = new Answer;
         $answer->question_id = 5;
         $answer->form_id = $form_id;
         $answer->option_id = $request->location;
         $answer->save();
         $answer = new Answer;
         $answer->question_id = 6;
         $answer->form_id = $form_id;
         $answer->option_id = $request->student_condition;
         $answer->save();
     }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
