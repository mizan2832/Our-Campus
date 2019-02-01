@extends('main')

@section('title','|All Tags')

@section('stylesheets')
  {!! Html::style('css/parsley.css')!!}
@endsection

@section('content')
	
	<div class="row">
		<div class="col-md-8">
			<h1>Tags</h1>
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
					</tr>
				</thead>
				<tbody>
				@foreach($tags as $tag)
					<tr>
						<th>{{$tag->id}}</th>
						<td> <a href="{{route('tags.show',$tag->id)}}">{{$tag->name}}</a></td>
					</tr>
			    @endforeach
				</tbody>
			</table>
		</div>

		<div class="col-md-3">
			<div class="well">
				{!!Form::open(['route'=>'tags.store','method'=>'POST','data-parsley-validate'=>''])!!}
				<h2>New Tag</h2>
				{{Form::label('name','Name:')}}
				{{Form::text('name',null,['class'=>'form-control','required'=>'','minlength'=>'5','maxlength'=>"100"])}}
				{{Form::submit('Create Add Tag',['class'=>'btn btn-primary btn-block','style'=>'margin-top:5px;'])}}
				{!!Form::close()!!}

			</div>
		</div>
	</div>

@endsection

@section('scripts')
  {!! Html::script('js/parsley.min.js')!!}
@endsection