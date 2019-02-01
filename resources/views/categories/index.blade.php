@extends('main')

@section('title','|All Categories')

@section('stylesheets')
  {!! Html::style('css/parsley.css')!!}
@endsection

@section('content')
	
	<div class="row">
		<div class="col-md-8">
			<h1>Categories</h1>
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
					</tr>
				</thead>
				<tbody>
				@foreach($categories as $category)
					<tr>
						<th>{{$category->id}}</th>
						<td>{{$category->name}}</td>
					</tr>
			    @endforeach
				</tbody>
			</table>
		</div>

		<div class="col-md-3">
			<div class="well">
				{!!Form::open(['route'=>'categories.store','method'=>'POST','data-parsley-validate'=>''])!!}
				<h2>New Category</h2>
				{{Form::label('name','Name:')}}
				{{Form::text('name',null,['class'=>'form-control','required'=>'','minlength'=>'5','maxlength'=>"100"])}}
				{{Form::submit('Add Category',['class'=>'btn btn-primary btn-block','style'=>'margin-top:5px;'])}}
				{!!Form::close()!!}

			</div>
		</div>
	</div>

@endsection

@section('scripts')
  {!! Html::script('js/parsley.min.js')!!}
@endsection