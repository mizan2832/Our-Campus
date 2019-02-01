@extends('main')
<?php $titleTag = htmlspecialchars($post->title);?>
@section('title',$titleTag)

@section('content')

  <div class="row">
        
  	    <div class="col-md-8 col-md-offset-2">
         @if(isset($post->image) == 0)
                     <img src="{{asset('images/'.$post->image)}}" >
                       
             @endif 
     	 <h1>{{$post->title}}</h1>
     	 <p>{!!$post->body!!}</p>
     	 <hr>
     	 <p>Posted In: {{$post->category->name}}</p>


     </div>

  </div>
  <div class="row" style="">
  	<div class="col-md-8 col-md-offset-2">
  	<h3 class="comments-title"><span class="glyphicon glyphicon-comment"></span>{{$post->comments()->count() }} Comments</h3>
  		@foreach($post->comments as $comment)

  		<div class="media">
			<div class="media-left">
			 
			      <img class="media-object" class="author-image" src="{{ "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $comment->email ) ) ) . "?d=" . urlencode( 'programmer620@gmail.com' )}}" />
			  
			</div>
		  <div class="media-body">
			    <h4 class="media-heading">{{$comment->name}}<br>
			    </h4>
			    <p>{{date("F nS,Y,g:i a",strtotime($comment->created_at))}}</p>
			    <p>{{$comment->comment}}</p>
		    
		  </div>
		</div>
  			
  		@endforeach
  	</div>
  </div>
  <div class="row">
  	<div id="comment-form " class="col-md-8 col-md-offset-2">
  		{{Form::open(['route'=>['comments.store',$post->id],'method'=>'POST'])}}
  		<div class="col-md-6">
  		 {{Form::label('name',"Name:")}}
  		{{Form::text('name',null,['class'=>'form-control'])}}
  		</div>

  		<div class="col-md-6">
  		 {{Form::label('email',"Email:")}}
  		{{Form::text('email',null,['class'=>'form-control'])}}
  		</div>
  		<div class="col-md-12">
  			 {{Form::label('comment',"Comment:")}}
  		{{Form::textarea('comment',null,['class'=>'form-control','rows'=>'5'])}}
  		{{Form::submit('Add Comment',['class'=>'btn btn-success'])}}
  		</div>
  		{{Form::close()}}
  		
  	</div>
  </div>
 

@endsection