<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\question;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
       /* $this->validate($req,[
            'quiz_name'=>'required|unique:quizes',
           ]);*/
    
          $member= new Quiz;
          $member->quiz_name=$req->quiz_name;
          $member->topic_name=$req->topic_name;
          $member->quiz_date=$req->quiz_date;
          $member->teacher_name=$req->teacher_name;
          $member->quiz_time=$req->quiz_time;
          $member->number_of_question=$req->number_of_question;
          $member->save();
        //return redirect()->back()->with('data add');
         $req->Session()->flash('status','Data Added');
         return redirect('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data =Quiz::all();
        return view('index',["data"=>$data]);
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
    function AddQuestion(Request $req){
      $data= new question;
      $data->quiz_id=$req->quiz_id;
      $data->question=$req->question;
      $data->option1=$req->option1;
      $data->option2=$req->option2;
      $data->option3=$req->option3;
      $data->option4=$req->option4;
      $data->final_answer=$req->final_answer;
      $data->save();
      $req->Session()->flash('message','question Added');
      return redirect('index');
    }
    function View($id){
        $quesId=$id;
        $data= DB::table('quizes')->join('questions','quizes.id','=','questions.quiz_id')
        ->where('questions.quiz_id','=',$quesId)->select('*')->get();
        return view('view',['data'=>$data]);
    }
    function Add($id){
        $data=$id;
        return view('add_question',['data'=>$data]);
    }

    public function HomePage(){
        $data=Quiz::all();
        return view('home',["val"=>$data]);
    }
}
