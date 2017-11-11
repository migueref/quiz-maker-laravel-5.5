<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('answers', 'Answers\AnswersController');
Route::resource('applicants', 'Applicants\ApplicantsController');
Route::resource('exams', 'Exams\ExamsController');
Route::resource('forms', 'Forms\FormsController');
Route::resource('options', 'Options\OptionsController');
Route::resource('questions', 'Questions\QuestionsController');
