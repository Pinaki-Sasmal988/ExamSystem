<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class AccountController extends Controller
{
    function CreateAccount(Request $req ){
     $val= new user;
     $val->name=$req->name;
     $val->email=$req->email;
     $val->password=$req->password;
     $result=$val->save();
     if($result>0){
        $req->Session()->flash('message','Account Created Successfully!!');
        return view('CreateAccount'); 
     }else{
        $req->Session()->flash('message','Sorry');
        return redirect('CreateAccount');
     }

    }
    function login(Request $req){
       $val=user::where(['email'=>$req->email,'password'=>$req->password])->first();
       if(!$val){
           return "Password Does't Match";
       }
       else{
         $req->session()->put('user',$val);
          return redirect('home');
       }
      
  }
 
}