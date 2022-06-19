@extends('master');
@section('content')

@if (Session::get('message'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
 {{Session::get('message')}}
 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    
@endif
   
 <div class="page-contener">
    <h1>
    Quiz  Add
    <small>
    <i class="ace-icon fa fa-angle-double-right"></i>
    Quiz for front page </small>&nbsp;<a href="/quizes">Quiz  View</a>
    </h1>
    </div><!-- /.page-header -->
    <div class="row">
    <div class="col-xs-12">
    <!-- PAGE CONTENT BEGINS -->
    
   @if (Session::get('status'))
   <div class="alert alert-warning alert-dismissible fade show" role="alert">
    {{Session::get('status')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
       
   @endif
    
   <form class="form-horizontal" role="form" action="quize" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="space-4"></div>
     
     
    <div class="space-4"></div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> </label>
        <div class="col-sm-9">
             
         <input type="text" id="form-field-2" placeholder="Quize Name" class="col-xs-10 col-sm-5" name="quiz_name" required="" >
             
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-2">topic</label>
        <div class="col-sm-9">
            <input type="text" id="form-field-2" placeholder="Descriotion" class="col-xs-10 col-sm-5" name="topic_name" required="" />
            
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-2">Quiz Date</label>
        <div class="col-sm-9">
            <input type="date" id="form-field-2" placeholder="quiz date" class="col-xs-10 col-sm-5" name="quiz_date"   />
            
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-2">Teacher Name</label>
        <div class="col-sm-9">
            <input type="text" id="form-field-2" placeholder="quiz date" class="col-xs-10 col-sm-5" name="teacher_name"   />
            
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-2">Quiz Time</label>
        <div class="col-sm-9">
            <input type="text" id="form-field-2" placeholder="00:00"  pattern="[0-9]{2}:[0-9]{2}" class="col-xs-10 col-sm-5" name="quiz_time" required="" title="example 01:00 " />
            <span> exm: 00:00</span>
        </div> 
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-2">Number Of Question View for User</label>
        <div class="col-sm-9">
            <input type="text" id="form-field-2" placeholder="How many question view for this quiz " class="col-xs-10 col-sm-5" name="number_of_question" required="" />
            
        </div>
    </div>
    <div class="space-4"></div>
    <div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-info" type="submit">
                <i class="ace-icon fa fa-check bigger-110"></i>
                Submit
            </button>
    
            &nbsp; &nbsp; &nbsp;
            <button class="btn" type="reset">
                <i class="ace-icon fa fa-undo bigger-110"></i>
                Reset
            </button>
        </div>
    </div>
    
    <div class="hr hr-24"></div>
    
     
    </form>

    
    <table class="table" width:50px>
        <thead>
          <tr>
            <th scope="col">serial No</th>
            <th scope="col">Quize Name</th>
            <th scope="col">topic</th>
            <th scope="col">Date</th>
            <th scope="col">Teacher Name</th>
            <th scope="col">Time</th>
            <th scope="col">Addquestion</th>
            <th scope="col">No of question</th>
            <th scope="col">View_Quesztion</th>

          </tr>
        </thead>
        
           @foreach ( $data as $item )  
              <tr>
              <td>{{ $item['id']}}</td>
              <td>{{ $item['quiz_name'] }}</td>
              <td>{{ $item['topic_name']}}</td>
              <td>{{ $item['quiz_date'] }}</td>
              <td>{{ $item['teacher_name'] }}</td>
              <td>{{ $item['quiz_time'] }}</td>
              <td><a href={{ "/add".$item['id'] }}>Add_Question</a></td>
              <td>{{ $item['number_of_question'] }}</td>
              <td><a href={{ "/view".$item['id'] }}>View</a></td>

    
               </tr>
       
         @endforeach
         @endsection
         


       






           