<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    function StartExam($id){
        $quesId=$id;
        $data= DB::table('quizes')->join('questions','quizes.id','=','questions.quiz_id')
        ->where('questions.quiz_id','=',$quesId)->select('*')->get();
        return view('StartExam',['data'=>$data]);
    }
}
