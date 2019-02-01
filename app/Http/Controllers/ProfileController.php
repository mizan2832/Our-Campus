<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Profile;
use Session;
use Image;
use Auth;
use App\Post;
use App\District;
use App\Status;
use App\Group;
use Illuminate\Support\Facades\DB;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {
        
  


    $profile = DB::table('profiles')->where('user_id', Auth::user()->id)->first();

    $post = DB::table('posts')->where('user_id', Auth::user()->id)->get();
    $paginate = DB::table('posts')->where('user_id', Auth::user()->id)->paginate(5);;



    return view('profile.index')->withProfile($profile)->withPosts($post)->withPaginate($paginate);
  }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $district = District::all();
       $status = Status::all();
        $blood = Group::all();
 $profile = DB::table('profiles')->where('user_id', Auth::user()->id)->first();

         return view('profile.create')->withBloods($blood)
         ->withStatus($status)->withDistricts($district)->withProfile($profile);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $this->validate($request, array(
                'name'         => 'required|max:255',
                'department_id'  => 'required|min:5|max:100|',
                'department'   => 'required|',
                'session'  => 'required',
              
                'district' => 'required',
                'image'=>'required|image|mimes:png,jpg,jpeg,gif,bmp|max:2000'
            ));
      

        // store in the database
        $profile = new Profile;

        $profile->name = $request->name;
        $profile->department = $request->department;
        $profile->department_id = $request->department_id;
        $profile->session = $request->session;
        $profile->email = Auth::user()->email;
        $profile->user_id = Auth::user()->id;
 

    $district = District::where('id','=',$request->district)->first();
    $profile->district = $district->district;

        $profile->area = $request->area;
        $profile->last_donat = $request->last_donat;
        $profile->slogan = $request->slogan;

    $blood = Group::where('id','=',$request->blood)->first();
    $profile->group = $blood->group;

    $status = Status::where('id','=',$request->status)->first();
    $profile->status = $status->status;

    $profile->birthday = $request->birthday;
       
       
        $profile->contact = $request->contact;
      
       
      

        if ($request->hasFile('image')) {
          $image = $request->file('image');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $location = public_path('images/' . $filename);
          Image::make($image)->save($location);

          $profile->image = $filename;
        }

        $profile->save();

     

        return redirect()->route('profile.index')->with('status', 'Profile created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

         $district = District::all();
       $status = Status::all();
        $blood = Group::all();
          
        $profile = Profile::where('user_id','=',$id)->first();

         return view('profile.edit')->withBloods($blood)
         ->withStatus($status)->withDistricts($district)->withProfile($profile);
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

         $profile = Profile::find($id);

       

    


        // store in the database
       

        $profile->name = $request->name;
        $profile->department = $request->department;
     
        $profile->session = $request->session;
        $profile->email = Auth::user()->email;
        $profile->user_id = Auth::user()->id;
 

    $district = District::where('id','=',$request->district)->first();
    $profile->district = $district->district;

        $profile->area = $request->area;
        $profile->last_donat = $request->last_donat;
        $profile->slogan = $request->slogan;

    $blood = Group::where('id','=',$request->blood)->first();
    $profile->group = $blood->group;

    $status = Status::where('id','=',$request->status)->first();
    $profile->status = $status->status;

    $profile->birthday = $request->birthday;
       
       
        $profile->contact = $request->contact;
      
       
      

        if ($request->hasFile('image')) {
          $image = $request->file('image');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $location = public_path('images/' . $filename);
          Image::make($image)->save($location);

          $profile->image = $filename;
        }

        $profile->save();

     

        return redirect()->route('profile.index')->with('status', 'Profile Updated!');
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
