@extends('main')

@section('title','|Blog')


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
             
                <h3>Search result for <big>{{$query}}</big>  </h3>
                    
               
                  @foreach($details as $detail)
                    
                    <div class="page">
                     <h3>{{$detail->title}}</h3>
                       <div class="details">
                            <ul>
                                <li>Posted By: <a href="" >{{$detail->getUserName()}}</a>  </li>
                                <li>Published:{{date('M j,Y',strtotime($detail->created_at))}}</li>
                                <li>Webdesign</li>
                            </ul>
                        </div>
             @if(isset($detail->image))
                     <img src="{{asset('images/'.$detail->image)}}" >
                       
             @endif    
                        <div class="content">
                             <p>{{substr(strip_tags($detail->body),0,300)}}{{strlen(strip_tags($detail->body))>250 ? '.....':""}}</p>
                        </div>
                        <h4> <a href="{{route('blog.single',$detail->slug,$detail->count)}}" class="btn btn-primary">Read more</a></h4>
                    </div>
                   @endforeach
                   <div class="pagination">
               
            </div>

            
                    
            
                </div>
                <div class="col-md-4">
                    
                    <div class="widgets">
                        <h3>Search</h3>
                        <form  action="/search" method="POST" role="search">
                            {{ csrf_field() }}
                        <div class="input-group">
                           
                         
                                <input type="text" class="form-control" name="q" placeholder="Search Blog">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit" style="margin-top:-1px;">search</button>
                                </span>
                            </form>
                        </div>
                    </div>
                    

                      

                    <div class="widgets" style="background-color:gray;">


                        <h3>Categories</h3>
                        <ul style="color:green;">
                         @foreach($categories as $category)
                            <li><a href="{{route('categories.show',$category->id)}}" >{{$category->name}}</a></li>
                     @endforeach
                         
                        </ul>
                    </div>


                    <div class="widgets" style="background-color:gray;">
                        <h3>Most Popular</h3>
                        <ul>
                           @foreach($populars as $popular)


                         <li><h4><a href="{{url('blog/'.$popular->slug)}}">{{substr(strip_tags($popular->body),0,120)}}{{strlen(strip_tags($popular->body))>300?"....":""}} </a></h4></li>

                            @endforeach
                        </ul>
                    </div>

                    
                    <div class="widgets">
                        <h3>Recent Posts</h3>
                        <ul>
                            <li><h4><a href="#">There are many variations of passages of Lorem Ipsum</a></h4></li>
                           
                           
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

</div><!-- main-page -->
   
   
   
   
   


  


@endsection




