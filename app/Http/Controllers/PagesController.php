<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;
use App\Post;
use Session;
use DB;



class PagesController extends Controller
{
    
   public function getWelcome()
   {
      
       $post = DB::table('posts')->paginate(5);

      
     
       return view('pages.welcome')->withPosts($post);

   
   }
     public function getAbout()
   {
       return view('pages.about');

   
   }

     public function getContact()
   {
       return view('pages.contact');

   
   }


   public function postGallery(){
      return view('pages.gallery');
   }
   
  public function postContact(Request $request) {
    $this->validate($request, [
      'email' => 'required|email',
      'subject' => 'min:3',
      'message' => 'min:10']);

    $data = array(
      'email' => $request->email,
      'subject' => $request->subject,
      'bodyMessage' => $request->message
      );

    Mail::send('emails.contact', $data, function($message) use ($data){
      $message->from($data['email']);
      $message->to('mrahman5037@gmail.com');
      $message->subject($data['subject']);
    });

    Session::flash('success', 'Your Email was Sent!');

    
  }
}
