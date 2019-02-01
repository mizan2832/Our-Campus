 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><h1>Our Campus</h1</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1 " style="margin-top: 10px;">
      <ul class="nav navbar-nav">
        <li class="{{Request::is('/')? " active" : ""}}" ><a href="/">Home</a></li>
        <li class="{{Request::is('blog')? " active" : ""}}" ><a href="/blog">Blog</a></li>
        <li class="{{Request::is('tui')? " active" : ""}}" ><a href="/tui">Tuition</a></li>
        <li class="{{Request::is('donate')? " active" : ""}}" ><a href="/donate">Blood Donate</a></li>
        <li class="{{Request::is('research')? " active" : ""}}" ><a href="/research">Research</a></li>

               
    
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
      @if(Auth::check())
        
       <!--  <a href="{{route('profile.index')}}" class="btn btn-primary">Hello {{Auth::user()->name}}</a> -->  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Hello {{Auth::user()->name}}
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
    
      <li><a href="{{route('posts.create')}}">Create Post</a></li>
      <li><a href="{{route('profile.index')}}">Your Timeline</a></li>
      <li><a href="{{route('logout')}}">Log-Out</a></li>
    </ul>
  </div>

    

        
        
        @else 
           <a href="{{route('login')}}" class="btn btn-primary">Login</a>
             <a href="{{route('register')}}" class="btn btn-primary">Register</a>
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>