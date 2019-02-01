@extends('main')

@section('title',"|$tag->name Tag")

@section('content')

  <div class="row">
  	<div class="col-md-12 col-md-offset-2">
  		<h1><h1>{{$tag->name}} Tag <small>{{$tag->posts()->count() }}</small></h1></h1>
  	</div>
  </div>
  
   @foreach($tag->posts as $post)
   <div class="row">
  
  	<div class="col-md-12 col-md-offset-2">
  		<h2>{{$post->title}}</h2>
  			@foreach($post->tags as $tag)
  					 		   <a href="{{route('tagpage.show',$tag->id)}}"><span class="label label-default">{{$tag->name}}</span></a>
  			@endforeach
  		<h5>Published:{{date('M j,Y',strtotime($post->created_at))}}</h5>
  		<p>{{substr(strip_tags($post->body),0,250)}}{{strlen(strip_tags($post->body))>250 ? '.....':""}}</p>
  		<a href="{{route('blog.single',$post->slug,$post->count)}}" class="btn btn-primary">Read more</a>
  		<hr>
  	</div>
  </div>
  @endforeach


@endsection