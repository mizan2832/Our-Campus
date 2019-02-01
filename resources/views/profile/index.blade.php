@extends('main')
@section('content')

    <div class="row">
     
        <div style=""> </div>

        @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
        <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
          @if(isset($profile->user_id))
            <div class="panel panel-default">
              
                <div class="panel-body">
                    
                    <div class="media">
                        <div align="center">
                        
                            <img class="thumbnail img-responsive" src="{{asset('images/'.$profile->image)}}" width="300px" height="150px">

                            <h4><strong> @if(isset($profile->user_id)) {{$profile ->name}} @endif</strong></h4>
                          <span class="badge" style="background: rgba(220, 71, 71, 0.78);">D</span>
                          <span class="badge" style="background: rgba(23, 106, 208, 0.6);">S</span>
                        </div>
                         
                        <div class="media-body text-center  ">
                            
                         
                            <hr>
                            <h5>Depertment: <strong> @if(isset($profile->user_id)){{$profile->department}}@endif</strong></h5>

                            <h5>Session: <strong> @if(isset($profile->user_id)){{$profile->session}}@endif</strong></h5>
                            
                            <hr> 

                            <h5>District: <strong> @if(isset($profile->user_id)){{$profile->district}}@endif</strong></h5>
                            
                    
                            <h5>Birthday: <strong>
                            @if(isset($profile->user_id)){{$profile->birthday}}@endif</strong></h5>

                            <h5>Blood Group: <strong>@if(isset($profile->user_id)){{$profile->group}}@endif
                            </strong></h5>
                        </div>
                  

                    </div>
              
                
               
            <!--       {!!Html::linkRoute('profile.edit','Edit Profile',array($profile->user_id),array('class'=>'btn btn-primary btn-block'))!!}
                <a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create New Post</a> -->
               <!--  <a href="{{ route('logout') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Log Out</a> -->
                </div>
             
            </div>
            @else 
                <div class="panel panel-default">
                <div class="panel-body">
                    <div class="media">
                        <div align="center">
                            <img class="thumbnail img-responsive" src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" width="300px" height="300px">
                        </div>
                        <div class="media-body">
                            <hr>
                            <h4><strong></strong></h4>
                         
                            <hr>
                            <h4><strong>Department</strong></h4>
                            <hr>
                            <h3><strong>Session</strong></h3>
                            
                            <hr> 
                            <h3><strong>District</strong></h3>
                            
                            <hr>
                            <h3><strong>Birthday</strong></h3>
                            <p></p>
                        </div>

           
                    </div>
                     <a href="{{route('profile.create')}}" class="btn btn-lg btn-block btn-primary">Create Profile</a>
                </div>
            </div>
          @endif
        </div>
        <div class="col-md-9" style="background: rgba(193, 193, 193, 0.33); ">
        
          <div class="form-group">
  <label for="comment">What's on your mind:</label>
  <textarea class="form-control" rows="5" id="comment"></textarea>
  <button class="btn btn-success btn-lg " name="Post" style="float: right;    width: 8vw;">Post</button>
  <hr>
  <hr>
  <hr>
</div>  
       @if(isset($posts))
           @foreach($posts as $post)
          <div class="page">
            <h3>{{$post->title}}</h3>

                     <div class="details">
                            <ul>
                                <li>Published:{{date('M j,Y',strtotime($post->created_at))}}</li>
                             
                            </ul>
                        </div>
                    
              
                        <div class="content">
                             <p style="">{{substr(strip_tags($post->body),0,300)}}{{strlen(strip_tags($post->body))>250 ? '.....':""}}</p>
                        </div>
                        <h4> 
                      @if(Auth::check())
                         {!!Html::linkRoute('posts.edit','Edit',array($post->id),array('class'=>'btn btn-primary btn-block','style'=>'    width: 6vw;'))!!}

                          {!!Form::open(['route' => ['posts.destroy',$post->id],'method'=>'DELETE'])!!} 
                    
                        {!!Form::submit('Delete',['class'=>'btn btn-danger btn-block','style'=>'width: 60px;margin-left: 7vw; margin-top: -11vh;background: #c36060;'])!!} 
                       
                      {!!Form::close()!!}
               @endif

        @endforeach
       
  

            
         
           
        </div>

           <div class="pagination">
               {!!$paginate->links()!!}
            </div>
     @endif
    </div>
        <div class="col-md-1">

                   
           
            
        </div>
    </div>

@endsection