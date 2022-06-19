@extends('master')
@section('content')
<table class="table">
  <a href="index">GoToQuizPage</a>

    <thead>
      <tr>
        <th scope="col">Question</th>
        <th scope="col">OPtion1</th>
        <th scope="col">Option2</th>
        <th scope="col">Option3</th>
        <th scope="col">Option4</th>
        <th scope="col">final_answer</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>

      </tr>
    </thead>
    
        @foreach ($data as $item)  
        <tr>
          
          <td>{{ $item->question}}</td>
          <td>{{ $item->option1}}</td>
          <td>{{ $item->option2 }}</td>
          <td>{{ $item->option3 }}</td>
          <td>{{ $item->option4 }}</td>
          <td>{{ $item->final_answer }}</td>
          <td><a href={{ "/edit".$item->id }}>Update</a></td>
          <td><a href={{ "/delete".$item->id }}>Delete</a></td>

        </tr>
        @endforeach
        @endsection