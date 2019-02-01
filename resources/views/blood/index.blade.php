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
           @foreach($bloods as $blood)
         
               <option value="">{{$blood->group}}</option>
                
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
					         <form  action="/blood" method="POST" role="search">
                         {{ csrf_field() }}    

                  <div class="form-group">
                   <label for="blood">Enter Blood:</label>
                       <input type="text" class="form-control" name="blood" placeholder="Enter Blood">
                            
                  </div>

                  <div class="form-group">
                   <label for="area">Enter Area:</label>
                       <input type="text" class="form-control" name="area" placeholder="Enter area">
                         
                  </div>

              
                

                   
                 
                  <div class="form-group">
                    <label for="district">Enter District:</label>
                    <input type="text" class="form-control" id="subject" placeholder="Enter District" name="district">
                 
                  
                
                
                </div>
               
                  <button type="submit" class="btn btn-default">Submit</button>
               </form>
              
					    
					    </div>

					  </div>
					</div></div>
   
  

                
  </div>
       
</div>
  

    <table class="table  table-hover table-responsive" style="border-color: re" >
    <thead>
      <tr>
        <th style="width: 400px; text-align: center;">Content</th>
        <th style="text-align: center;">Contact</th>
        <th style="text-align: center;">Location</th>
        <th style="text-align: center;">Last Donation</th>
      </tr>
</thead>
    <tbody>
     @foreach($profile as $profile)
      <tr>
     
        <td>{{$profile->slogan}}<br>{{$profile->group}}</td>
        <td>{{$profile->contact}}</td>
        <td>{{$profile->district}}<br>{{$profile->area}}</td>
        <td>{{$profile->last_donat}}</td>
      </tr>
     @endforeach
    </tbody>
  </table>



	
@endsection