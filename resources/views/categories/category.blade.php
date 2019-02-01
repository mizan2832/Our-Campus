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
     
                  @foreach($posts as $post)
                    
                    <div class="page">
                     <h3>{{$post->title}}</h3>
                       <div class="details">
                            <ul>
                                <li>Posted By: {{$post->getUserName()}}</li>
                                <li>Published:{{date('M j,Y',strtotime($post->created_at))}}</li>
                                <li>Webdesign</li>
                            </ul>
                        </div>
                      @if(isset($post->image))
                     <img src="{{asset('images/'.$post->image)}}" >
                       
             @endif
                       
                     
                        <div class="content">
                             <p>{{substr(strip_tags($post->body),0,300)}}{{strlen(strip_tags($post->body))>250 ? '.....':""}}</p>
                        </div>
                        <h4> <a href="{{route('blog.single',$post->slug,$post->count)}}" class="btn btn-primary">Read more</a></h4>
                    </div>
                   @endforeach
                   <div class="pagination">
              
            </div>

                    
                    
                </div>
                <div class="col-md-4">
                    
                    <div class="widgets">
                        <h3>Search</h3>
                        <div class="input-group">
                            <input type="text" class="form-control" name="x" placeholder="Search term...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button" style="margin-top:-1px;">search</button>
                            </span>
                        </div>
                    </div>
                    

                      

                    <div class="widgets" style="background-color:gray;">


                        <h3>Categories</h3>
                        <ul style="color:green;">
                         @foreach($categories as $category)
                            <li><a href="{{route('categories.show',$category->id)}}">{{$category->name}}</a></li>
                     @endforeach
                         
                        </ul>
                    </div>


                    <div class="widgets" style="background-color:gray;">
                        <h3>Most Popular</h3>
                        <ul>
                           @foreach($populars as $popular)


                         <li><h4><a href="{{url('blog/'.$post->slug)}}">{{substr(strip_tags($popular->body),0,120)}}{{strlen(strip_tags($popular->body))>300?"....":""}} </a></h4></li>

                            @endforeach
                        </ul>
                    </div>

                    
                    <div class="widgets">
                        <h3>Recent Posts</h3>
                        <ul>
                            <li><h4><a href="#">There are many variations of passages of Lorem Ipsum</a></h4></li>
                            <li><h4><a href="#">There are many variations of passages of Lorem Ipsum</a></h4></li>
                            <li><h4><a href="#">There are many variations of passages of Lorem Ipsum</a></h4></li>
                           
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

</div><!-- main-page -->
   
   
   
   
   


  


@endsection