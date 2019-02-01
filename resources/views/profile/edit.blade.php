@extends('main')
@section('content')

    <div class="row">
     
        <div style="padding-top:0px;"> </div>
        <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
         @if(isset($profile->user_id))
            <div class="panel panel-default">
                <div class="panel-body">
                   <div class="media">
                        <div align="center">
                        
                            <img class="thumbnail img-responsive" src="{{asset('images/'.$profile->image)}}" width="300px" height="300px">
                      
                        </div>
                         
                        <div class="media-body">
                            <hr>
                            <h4><strong> @if(isset($profile->user_id)) {{$profile ->name}} @endif</strong></h4>
                         
                            <hr>
                            <h4><strong> @if(isset($profile->user_id)){{$profile->department}}@endif</strong></h4>
                            <hr>
                            <h3><strong> @if(isset($profile->user_id)){{$profile->session}}@endif</strong></h3>
                            
                            <hr> 
                            <h3><strong> @if(isset($profile->user_id)){{$profile->district}}@endif</strong></h3>
                            
                            <hr>
                            <h3><strong>Birthday</strong></h3>
                            <p> @if(isset($profile->user_id)){{$profile->birthday}}@endif</p>
                        </div>
                  

                    </div>
                </div>
            </div>
            @endif
        </div>
        <div class="col-lg-8 col-md-9 col-sm-12 col-xs-12">
          
          <div class="page">
                    
          {!! Form::model($profile,[ 'route' => ['profile.update',$profile->user_id], 'method'=>'patch','files'=>true ]) !!}

           {!!Form::label('name', 'Name') !!}
           {!!Form::text('name',null,['placeholder' => 'Enter Your Name','class'=>'form-control','required'=>'','maxlength'=>"100"])!!}

            {!!Form::label('department', 'Deparment') !!}
           {!!Form::text('department',null,['placeholder' => 'Enter Department Name','class'=>'form-control','required'=>'','maxlength'=>"100"])!!} 

           
           {!!Form::label('session', 'Session') !!}
           {!!Form::text('session',null,['placeholder' => 'Your Session','class'=>'form-control','required'=>''])!!}

          {!!Form::label('district','Your District:')!!}
           <select class="form-control" name="district">
             @foreach($districts as $district)
               <option value="{{$district->id}}">{{$district->district}}</option>
             @endforeach
           </select>

           {!!Form::label('birthday', 'Birthday') !!}
           {!!Form::text('birthday',null,['placeholder' => 'Your Birthday Date','class'=>'form-control','required'=>''])!!}

           <h1>Blood Information:</h1>

             {!!Form::label('blood','Blood Group:')!!}
           <select class="form-control" name="blood">
             @foreach($bloods as $blood)
               <option value="{{$blood->id}}">{{$blood->group}}</option>
             @endforeach
           </select>

             {!!Form::label('status','Your Status:')!!}
           <select class="form-control" name="status">
             @foreach($status as $status)
               <option value="{{$status->id}}">{{$status->status}}</option>
             @endforeach
           </select>

             {!!Form::label('last_donat', 'Last Donate Date:') !!}
           {!!Form::text('last_donat',null,['placeholder' => 'Your Last Donate Date','class'=>'form-control','required'=>''])!!}

             {!!Form::label('slogan', 'Slogan:') !!}
           {!!Form::text('slogan',null,['placeholder' => 'Your Slogan ','class'=>'form-control','required'=>''])!!}

             {!!Form::label('area', 'Area') !!}
           {!!Form::text('area',null,['placeholder' => 'Your Area ','class'=>'form-control','required'=>''])!!}

            {!!Form::label('contact', 'Contact Number') !!}
           {!!Form::text('contact',null,['placeholder' => 'Your Area ','class'=>'form-control','required'=>''])!!}
           
           {{Form::label('image','Uploaded Profile Image:')}}
           {{Form::file('image')}}

           

             {!! Form::submit('Update Profile', ['class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px;']) !!}
    
            {!! Form::close() !!}
        </div>
           
                
            
         
           
        </div>
        <div class="col-md-1">

                   
        
        </div>
    </div>

@endsection


@section('scripts')
  {!! Html::script('js/parsley.min.js')!!}
  {!! Html::script('js/select2.min.js')!!}
  <script type="text/javascript">
     $('.select2-multi').select2();
  </script>
@endsection