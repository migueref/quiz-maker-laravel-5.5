<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware'=>'auth'],function(){
     Route::resource('answers', 'Answers\AnswersController');
     Route::resource('applicants', 'Applicants\ApplicantsController');
     Route::resource('exams', 'Exams\ExamsController');
     Route::resource('forms', 'Forms\FormsController');
     Route::resource('options', 'Options\OptionsController');
     Route::resource('questions', 'Questions\QuestionsController');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
