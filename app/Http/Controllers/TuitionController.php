<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tuitioncategory;
use App\Tuition;
use App\Location;
use Session;
use DB;

class TuitionController extends Controller
{
   public function __construct(){
        $this->middleware('auth');
    }
    

    public function index()
    {

        $tuitioncategory = Tuitioncategory::all();
        $tuitionpost = Tuition::all();
         $location = Location::all();
          
     return view('tuition.index')->withTuitioncategories($tuitioncategory)->withTuitionposts($tuitionpost)
        ->withlocations($location);
    }
   
    public function getIndex()
    { 
         $tuitionpost = Tuition::all();
        $tuitioncategory = Tuitioncategory::all();
          $location = Location::all();
      
       return view('tuition.index')->withTuitioncategories($tuitioncategory)->withTuitionposts($tuitionpost)->withlocations($location);
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the data
        $this->validate($request, array(
                'location'         => 'required',
                'salary'          => 'required',
                'contact'         => 'required',
                'gender'          => 'required'
              
            ));

        // store in the database
        $tuition = new Tuition;
        
       $location = Location::where('id','=',$request->location)->first();
        $tuition->location = $location->location;
        $tuition->location_id = $request->location;


        $tuitioncategory = Tuitioncategory::where('id','=',$request->bangla)->first();
      
        $tuition->bangla =  $tuitioncategory->bangla;
        $tuition->bangla_id =  $request->bangla;
        $tuition->subject = $request->subject;
        $tuition->contact = $request->contact;
        $tuition->gender =  $request->gender;
        $tuition->salary =  $request->salary;

    

        $tuition->save();

        

        Session::flash('success', 'The blog post was successfully save!');

        return redirect()->route('tuition.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $tuitioncat = Tuition::where('bangla_id','=',$id)->get();
       
       $tuition = Tuitioncategory::all();
       $location = Location::all();

        return view('tuition.show')->withTuitions($tuition)->withTuitioncats($tuitioncat)->withlocations($location);
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
