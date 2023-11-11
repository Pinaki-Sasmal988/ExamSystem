<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\question;
class ExamController extends Controller
{
    function StartExam($id){
        $quesId=$id;
        $data= DB::table('quizes')->join('questions','quizes.id','=','questions.quiz_id')
        ->where('questions.quiz_id','=',$quesId)->select('*')->paginate('1');
        return view('StartExam',['data'=>$data]);
    }
    function check(Request $req,$id){
        $increment=0;
        $decrement=0;
       //$questionId=$id; 
       $data= question::find($id);

       if($data->final_answer == $req->option){
        $increment+=1;
        echo "$increment";
       }else{
        echo "$decrement";
       }
    }
}
