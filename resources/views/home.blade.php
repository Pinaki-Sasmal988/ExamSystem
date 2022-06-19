@extends('master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table class="table" width:50px>
        <thead>
            <tr>
                <th scope="col">serial No</th>
                <th scope="col">Quize Name</th>
                <th scope="col">topic</th>
    
                <th scope="col">Time</th>
                <th scope="col">No of question</th>
                <th scope="col">Start Exam</th>
    
            </tr>
        </thead>
    
        @foreach ($val as $item)
            <tr>
                <td>{{ $item['id'] }}</td>
                <td>{{ $item['quiz_name'] }}</td>
                <td>{{ $item['topic_name'] }}</td>
                <td>{{ $item['quiz_time'] }}</td>
                <td>{{ $item['number_of_question'] }}</td>
                <td><a href={{ '/StartExam' . $item['id'] }}>Start</a></td>
    
    
            </tr>
        @endforeach
    </table>
    
</body>
</html>
@endsection