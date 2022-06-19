<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\ExamController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

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

//    Route::get('/', function () {
//       return view('CreateAccount');
//  });
//Route::get('quizes',[Exam\QuizController::class,'create']);
//Route::get('quizes',[QuizController::class,'create']);/add_question
Route::view('index','index');
Route::view('CreateAccount','CreateAccount');
//Route::view('CreateAccount','CreateAccount');
Route::view('Login','Login');
Route::POST('/CreateAccount',[AccountController::class,'CreateAccount']);
Route::POST('/LoginPage',[AccountController::class,'login']);

Route::view('view','view');
Route::get('/home',[QuizController::class,'HomePage']);

Route::post('quize',[QuizController::class,'store']);
Route::get('index',[QuizController::class,'show']);
Route::get('/add{id}',[QuizController::class,'Add']);
Route::POST('/add_question',[QuizController::class,'AddQuestion']);
Route::get('/view{id}',[QuizController::class,'View']);
Route::get('/StartExam{id}',[ExamController::class,'StartExam']);