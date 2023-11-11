
      
        @foreach ($data as $key=>$item)  
        
          <b> {{ $key+1 }}. {{ $item->question}} </b><br>
          <form action="check" method="POST">
            @csrf
            <input type="text"  name="id" value="{{ $item->id }}" readonly/><br>
            <input type="checkbox" name="option" value="{{ $item->option1}}"/>{{ $item->option1}}<br>
            <input type="checkbox" name="option" value="{{ $item->option2}}"/>{{ $item->option2}}<br>
            <input type="checkbox" name="option" value="{{ $item->option3}}"/>{{ $item->option3}}<br>
            <input type="checkbox" name="option" value="{{ $item->option4}}"/>{{ $item->option4}}<br>
            <button type="submit" >Save & Continue</button>
          </form>
         
            @endforeach
            {{-- <span>{{ $data->links() }}</span>
            <style>
              .w-5{
                display: none;
              }
              </style> --}}

           
    
      
        
       