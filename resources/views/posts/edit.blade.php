@extends('main')

@section('title','|Edit Blog Post')

@section('stylesheets')
   {!! Html::style('css/select2.min.css')!!}
   <script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>

   <script >
     tinymce.init({
      selector:'textarea',
      plugins: 'link code',
      menubar: false
     });
   </script>
@endsection


@section('content')
  
   {!! Form::model($post,[ 'route' => ['posts.update',$post->id], 'method'=>'patch','files'=>true ]) !!}
	  <div class="row">
	    <div class="col-md-8">
	        {{Form::label('title','Title:',['placeholder' => 'Default Text to Display'])}}
		    {{Form::text('title',null,['class'=>'form-control input-lg'])}}

		    {{Form::label('slug','Slug:')}}
		    {{Form::text('slug',null,['class'=>'form-control'])}}

		    {{Form::label('category_id','Category:')}}
		    {{Form::select('category_id',$categories,null,['class'=>'form-control'])}}

		    {{Form::label('tags','Tags:',['class'=>'form-spacing_top'])}}
		    {{Form::select('tags[]',$tags,null,['class'=>'select2-multi form-control','multiple'=>'multiple'])}}

		     {{Form::label('image','Image:')}}
		     {{Form::file('image')}}

		    {{Form::label('body','Body:')}}
		     {{Form::textarea('body',null,['class'=>'form-control'])}}
	        
	    </div>
	    <div class="col-md-4">
	    	 <div class="well">
	    	 	<dl class="dl-horizontal">
				  <dt>Create At</dt>
				  <dd>{{date('M j,Y h:ia',strtotime($post->created_at))}}</dd>
				</dl>
				<dl class="dl-horizontal">
				  <dt>Updated At:</dt>
				  <dd>{{date('M j,Y h:ia',strtotime($post->updated_at))}}</dd>
				</dl>
				<hr>

				<div class="row">
					<div class="col-sm-6">
					   {!!Html::linkRoute('posts.show','Cancel',array($post->id),array('class'=>'btn btn-danger btn-block'))!!}
					</div>
					<div class="col-sm-6">
						{{Form::submit('Save Changes',['class' => 'btn btn-success btn-block'])}}
						
					</div>

				</div>
	    	 </div>
	    </div>
	  

	  </div>
	  {!!Form::close()!!}


@endsection

@section('scripts')
  {!! Html::script('js/select2.min.js')!!}
    <script type="text/javascript">
     $('.select2-multi').select2();
      $('.select2-multi').select2().val({!! json_encode($post->tags()->getRelatedIds())!!}).trigger('change');

  </script>
@endsection