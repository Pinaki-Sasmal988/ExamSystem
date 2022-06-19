{{-- @extends('master')
@section('content') --}}
         <script>
            var i=0;
         </script> 
        @foreach ($data as $key=>$item)  
        
       <b> {{ ++$key }}. {{ $item->question}} </b><br>
        
            <input type="checkbox" name="" value="{{ $item->option1}}"/>{{ $item->option1}}<br>
            <input type="checkbox" name="" value="{{ $item->option2}}"/>{{ $item->option2}}<br>
            <input type="checkbox" name="" value="{{ $item->option3}}"/>{{ $item->option3}}<br>
            <input type="checkbox" name="" value="{{ $item->option4}}"/>{{ $item->option4}}<br>
            <input type="checkbox" name="" value="{{ $item->final_answer}}"/>{{ $item->final_answer}}<br><br>
        @endforeach
    
        {{-- @endsection --}}
        
       