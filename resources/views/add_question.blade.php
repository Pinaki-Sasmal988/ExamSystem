@extends('header')

<div class="form-popup" id="myForm">

    <form action="add_question" method="POST" >
        
        @csrf
        
        <input type="hidden" value="{{ $data}}" name="quiz_id" required>
       
      <textarea style='width:800 'type="text" name="question" required></textarea><br><br>
        
      <input type="text" placeholder="Option-1" name="option1" required><br><br>

      <input type="text" placeholder="Option-2" name="option2" required><br><br>
      <input type="text"  placeholder="Option-3" name="option3" required><br><br>
      <input type="text"  placeholder="Option-4" name="option4" required><br><br>

      <input type="text" placeholder="Enter Final_Answer" name="final_answer" required><br><br>


      <button type="submit" class="btn">Submit</button>    
    </form>
  </div>
