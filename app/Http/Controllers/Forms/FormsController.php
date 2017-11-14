<?php

namespace App\Http\Controllers\Forms;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Form;
use App\Answer;
use App\Question;
use App\Institution;

class FormsController extends Controller
{
    public function __contruct() {

    }
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $questions = Question::get()->where('id', '==', 7);
         $institutions = Institution::get();

         return view('forms.create',['questions'=>$questions, 'institutions'=>$institutions]);
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
         if($this->saveTeacherTest($request)) {
              return redirect('/home');
         } else {
              return view('forms.create');
         }

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


     public function saveTeacherTest($request)
     {
          $form = new Form;
          $form->applicant_id = Auth::id();
          $form->exam_id = 2;
          $form->institution_id = $request->institution_id;
          if($form->save()) {
               $questions = Question::get()->where('id', '==', 7);
               foreach ($questions as $question) {
                    $answer = new Answer;
                    $answer->option_id = $request->{"answer".$question->id};
                    $answer->question_id = $request->{"question".$question->id};
                    $answer->form_id = $form->id;
                    $answer->save();
               }
               return true;
          } else {
               return false;
          }
     }
}
