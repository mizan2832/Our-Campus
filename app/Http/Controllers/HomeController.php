<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use  App\User;
use  App\Post;
use  App\Category;
use App\Group;
use App\Status;
use App\District;
use App\Profile;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

      public function search()
    {
      $categories = Category::all();
     $popular = Post::get()->sortByDesc('count');

     $q = Input::get ( 'q' );

     $post = Post::where ( 'title', 'LIKE', '%' . $q . '%' )->orWhere ( 'body', 'LIKE', '%' . $q . '%' )->get ();
 
          if (count ( $post ) > 0)
                 return view ( 'blog.search' )->withDetails ( $post )->withQuery ( $q )->withCategories($categories)->withPopulars($popular);
          else
                 return view ( 'blog.search' )->withMessage ( 'No Details found. Try to search again !' )->withCategories($categories)->withPopulars($popular);

      
    }

    

      public function blood()
    {
     
      $bl = Group::all();
        $district = District::all();
        $status = Status::all();

     $blood = Input::get ( 'blood' );
     $area = Input::get ( 'area' );
     $district = Input::get ( 'district' );

    $post = Profile::where ( 'group', 'LIKE', '%' . $blood . '%' )
    ->orWhere ( 'area', 'LIKE', '%' . $area . '%' )
    ->orWhere ( 'district', 'LIKE', '%' . $district . '%' )->get ();

 
    return view ( 'blood.search' )->withPosts($post)->withBl($bl);
   
    
  
    

     

      
    }


 
}
