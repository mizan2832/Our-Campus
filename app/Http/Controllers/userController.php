<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
   public function postSignUp()
   {
       return view('home');

   
   }
   public function store(Request $request)

    {
      $this->validate($request,[
         'email' =>'required|unique:posts,email'
        ]);
        $input = $request->all();

        User::create($input);
        return redirect('home');
        return $input;
    }
}