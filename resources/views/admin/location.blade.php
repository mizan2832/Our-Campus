@extends('main')

@section('title','|All Locations')

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
						<th>Location<th>
					</tr>
				</thead>
				<tbody>
			     	@foreach($locations as $location)
					<tr>
						<th>{{$location->id}}</th>
						<td>{{$location->location}}</td>
					</tr>
			    @endforeach
				</tbody>
			</table>


				
			
		</div>

		<div class="col-md-3">
			<div class="well">
				{!!Form::open(['route'=>'location.store','method'=>'POST','data-parsley-validate'=>''])!!}
				<h2>New Category</h2>
				{{Form::label('location','Location:')}}
				{{Form::text('location',null,['class'=>'form-control'])}}

		

				{{Form::submit('Add Location',['class'=>'btn btn-primary btn-block','style'=>'margin-top:5px;'])}}
				{!!Form::close()!!}

			</div>
		</div>
	</div>

@endsection

@section('scripts')
  {!! Html::script('js/parsley.min.js')!!}
@endsection