<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Category;

class BlogController extends Controller
{
	 public function getIndex(){

        $categories = Category::all();

      

       $popular = Post::get()->sortByDesc('count');
       $post = Post::orderBy('created_at','desc')->paginate(5);
    	
    	
    	return view('blog.index')
        ->withPopulars($popular)
        ->withPosts($post)
        ->withCategories($categories);
    }

    public function getSingle($slug){

           
         
          $categories = Category::all();
        $popular = Post::get()->sortByDesc('count');

        $post = Post::where('slug','=',$slug)->increment('count');
    	$post = Post::where('slug','=',$slug)->first();

      

    	return view('blog.single')->withPost($post)->withPopulars($popular)->withCategories($categories);
    }
 

}
