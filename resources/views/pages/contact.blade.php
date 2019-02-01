@extends('main')
@section('content')
<div class="row">
  <form action="{{url('contact')}}" method="POST">
    {{ csrf_field() }}
  <div class="form-group">
    <label name="email">Email:</label>
    <input name="email" class="form-control" id="email" placeholder="Enter email">
   </div>
 <div class="form-group">
    <label name="subject">Subject:</label>
    <input name="subject" class="form-control" id="subject" placeholder="Enter subject">
 </div>

  
 <div class="form-group">
    <label name="message">Message:</label>
    <textarea id="message" name="message" class="form-control">Type your message...</textarea>
 </div>
  <input type="submit" value="Message me" class="btn btn-success">
</form>

</div>
 
@endsection
