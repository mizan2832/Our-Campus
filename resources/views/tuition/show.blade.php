@extends('main')

@section('title','|Tuition')


@section('content')

 <div class="main-page">
    
   <!-- top-nav -->
   <div class="top-nav">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6"></div>
                <div class="col-md-6 col-sm-6"></div>
            </div>
        </div>   
   </div>
   
   <!-- main-banner -->
  
    
    <!-- post-widgets -->
    <div class="post-widgets">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    
               
               
                    
                    <div class="page">
                    
                    

                     <h3></h3>
                       @foreach($tuitioncats as $tuitioncat)
                       <div class="details" style="background-color: #B1B1B1;">
                            <ul>
                                <li>Posted By:{{Auth::user()->name}}<a href="" ></a>  </li>
                                <li>Published:{{date('M j,Y',strtotime($tuitioncat->created_at))}}</li>
                              
                            </ul>
                        </div>
           
                    
                       
                    
                        <div class="content">
                         <p>location:{{$tuitioncat->location}} <br><br>
                            Category:{{$tuitioncat->bangla}} <br><br>
                            Salary:{{$tuitioncat->salary}} <br><br>
                            Gender:{{$tuitioncat->location}} <br><br>
                            Contact:{{$tuitioncat->contact}} <br><br>
                            
                         </p>
                         <hr>
                        </div>
                       @endforeach
                    </div>
                
                   <div class="pagination">
             
            </div>

                    
                    
                </div>
                <div class="col-md-4">

                
                   <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Tuition Create</button>


					<div id="myModal" class="modal fade" role="dialog">
					  <div class="modal-dialog">

					    <!-- Modal content-->
					    <div class="modal-content">
					     
					      <div class="modal-body">
					          {!!Form::open(['route'=>'tuition.store','method'=>'POST','data-parsley-validate'=>''])!!}
							        <div class="form-group">
                                   {!!Form::label('location','Location:')!!}
                                       <select class="form-control" name="location">
                                         @foreach($locations as $location)
                                            <option value=""></option>
                                           <option value="{{$location->id}}">{{$location->location}}</option>
                                         @endforeach
                                       </select>
                                </div>
							    <div class="form-group">
							       {!!Form::label('bangla','Bangla Medium:')!!}
							           <select class="form-control" name="bangla">
							             @foreach($tuitions as $tuition)
							               <option value="{{$tuition->id}}">{{$tuition->bangla}}</option>
							             @endforeach
							           </select>
							    </div>
							   
							    <div class="form-group">
							      <label for="subject">Subject:</label>
							      <input type="subject" class="form-control" id="subject" placeholder="Enter Subject" name="subject">
							    </div>
							    <div class="form-group">
							      <label for="salary">Salary:</label>
							      <input type="salary" class="form-control" id="salary" placeholder="Enter Salary" name="salary">
							    </div>
							     <div class="form-group">
							      <label for="gender">Gender:</label>
							      <input type="gender" class="form-control" id="gender" placeholder="Enter Gender" name="gender">
							    </div>
							    <div class="form-group">
							      <label for="contact">Contact:</label>
							      <input type="contact" class="form-control" id="contact" placeholder="Enter Contact Number" name="contact">
							    </div>
							    
							  
							  
					      </div>
					     
					        <button type="submit" class="btn btn-default">Submit</button>
					      	{!!Form::close()!!}
					    
					    </div>

					  </div>
					</div>
               
                    



                    <div class="widgets" style="background-color:gray;">
                        <h3>Search</h3>
                        <form  action="/search" method="POST" role="search">
                            {{ csrf_field() }}
                        <div class="input-group">
                           
                         
                                <input type="text" class="form-control" name="q" placeholder="Search Tuition">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit" style="margin-top:-1px;">search</button>
                                </span>
                            </form>
                        </div>
                                       

                      

                    <div class="widgets" style="background-color:gray;">


                        <h3>Bangla Medium</h3>
                        <ul style="color:green;">
                         @foreach($tuitions as $tuition)
                            <li><a href="{{route('tuition.show',$tuition->id)}}" >{{$tuition->bangla}}</a></li>
                         @endforeach
                  
                         
                        </ul>
                    </div>
    
                    <div class="widgets" style="background-color:gray;">
                          <h3>Location</h3>
                  
                         <select class="form-control" name="links" onchange="window.location.href=this.value;">

                             @foreach($locations as $location)
                                <option value=""></option>
                               <option value="{{route('location.show',$location->id)}}">{{$location->location}}</option>
                             @endforeach
                           </select>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
 </div>

</div><!-- main-page -->
   
   
   
   
   


  


@endsection