@extends('main')
@section('title','|Blood')
@section('content')

 <div class="jumbotron text-center" >
  <h1 style="margin-top: -30px;">Research</p> 
  
    
  <div class="row">
    <div class="col-sm-8" style="background-color:weight;">
           <h3 style="text-align: left;"></h3>

           	<select style="width: 160px" class="form-control" name="links" onchange="window.location.href=this.value;">
        
         
              
                
          
        </select>

   </div>
    <div class="col-sm-4" style="background-color:weight;"> 
      
     <button style="margin-top: -10px;" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"> </button>
					<div id="myModal" class="modal fade" role="dialog">
					  <div class="modal-dialog">

					    <!-- Modal content-->
					    <div class="modal-content">
					     
					      <div class="modal-body">
					         <form  action="/blood" method="POST" role="search">
                         {{ csrf_field() }}    

                  <div class="form-group">
                   <label for="blood"></label>
                       <input type="text" class="form-control" name="blood" placeholder="Enter Blood">
                            
                  </div>

                  <div class="form-group">
                   <label for="area"></label>
                       <input type="text" class="form-control" name="area" placeholder="Enter area">
                         
                  </div>

              
                

                   
                 
                  <div class="form-group">
                    <label for="district"></label>
                    <input type="text" class="form-control" id="subject" placeholder="Enter District" name="district">
                 
                  
                
                
                </div>
               
                  <button type="submit" class="btn btn-default"></button>
               </form>
              
					    
					    </div>

					  </div>
					</div></div>
   
  

                
  </div>
       
</div>
  

    <table class="table  table-hover table-responsive" style="border-color: re" >
    <thead>
      <tr>
        <th style="width: 400px; text-align: center;"></th>
        <th style="text-align: center;"></th>
        <th style="text-align: center;"></th>
        <th style="text-align: center;"></th>
      </tr>
</thead>
    <tbody>
    
      <tr>
     
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
     
    </tbody>
  </table>



	
@endsection