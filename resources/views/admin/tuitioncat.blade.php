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
						<th>Bangla Medium</th>
					</tr>
				</thead>
				<tbody>
			     	@foreach($tuitioncat as $tuition)
					<tr>
						<th>{{$tuition->id}}</th>
						<td>{{$tuition->bangla}}</td>
					</tr>
			    @endforeach
				</tbody>
			</table>


				
			
		</div>

		<div class="col-md-3">
			<div class="well">
				{!!Form::open(['route'=>'tuitioncategory.store','method'=>'POST','data-parsley-validate'=>''])!!}
				<h2>New Category</h2>
				{{Form::label('bangla','Bangla:')}}
				{{Form::text('bangla',null,['class'=>'form-control'])}}

		

				{{Form::submit('Add Category',['class'=>'btn btn-primary btn-block','style'=>'margin-top:5px;'])}}
				{!!Form::close()!!}

			</div>
		</div>
	</div>

@endsection

@section('scripts')
  {!! Html::script('js/parsley.min.js')!!}
@endsection