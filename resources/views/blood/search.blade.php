@extends('main')
@section('title','|Blood')
@section('content')

 <div class="jumbotron text-center" >
  <h1 style="margin-top: -30px;">রক্ত দিন, জীবন বাঁচান</h1>
  <p style="color:red;">রক্তদাতার শেষ রক্তদানের তারিখ দেখে নিন... যদি রক্তদাতার শেষ রক্তদানের তিন মাস পূর্ণ হয়, তবেই রক্তদাতাকে কল করুন...</p> 
  
    
  <div class="row">
    <div class="col-sm-8" style="background-color:weight;">
           <h3 style="text-align: left;">Blood Group</h3>

           	<select style="width: 160px" class="form-control" name="links" onchange="window.location.href=this.value;">
           @foreach($bl as $bl)
         
               <option value="">{{$bl->group}}</option>
                
           @endforeach  
        </select>

   </div>
    <div class="col-sm-4" style="background-color:weight;"> 
      <h3>Search Blood Donors </h3>
     <button style="margin-top: -10px;" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"> Search</button>
					<div id="myModal" class="modal fade" role="dialog">
					  <div class="modal-dialog">

					    <!-- Modal content-->
					    <div class="modal-content">
					     
					      <div class="modal-body">
					          <form  action="/blood_search" method="POST" role="search">
                      
					      </form>
					    
					    </div>

					  </div>
					</div></div>
   
  

                
  </div>
       
</div>
  
   <h1>Search Result</h1>
    <table class="table table-bordered" >
    <thead>
      <tr>
        <th style="width: 400px; ">Content</th>
        <th>Contact</th>
        <th>Location</th>
        <th>Last Donation</th>
      </tr>
</thead>
    <tbody>

  
     @foreach($posts as $post)
      <tr>
   
     
        <td>{{$post->slogan}}<br>{{$post->group}}</td>
        <td>{{$post->contact}}</td>
        <td>{{$post->district}}<br>{{$post->area}}</td>
        <td>{{$post->last_donat}}</td>
      </tr>
     @endforeach
   

    
    </tbody>
  </table>



	
@endsection