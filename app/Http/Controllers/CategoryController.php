<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Category;
use Session;
use App\Post;




class CategoryController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //display a view of all of our categories
        // it will also have a form to create a new form 

        $categories = Category::all();

        return view('admin.category')->withCategories($categories);
    }

    public function getCtegory(Request $request){
            
     
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $this->validate($request,array(
             'name' => 'required|max:50|min:5',
         ));

         $category = new Category;

         $category->name = $request->name;

        Session::flash('msg', 'Category has been Saved.' );

         $category->save();
         
         return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       

        $categories = Category::all();
        $popular = Post::get()->sortByDesc('count');
     

         $post = Post::where('category_id','=',$id)->get();

         return view('categories.category')->withPosts($post)
       
         ->withPopulars($popular)
         ->withCategories($categories);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
