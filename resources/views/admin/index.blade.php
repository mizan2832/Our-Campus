  <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello {{Auth::user()->name}} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{route('categories.index')}}">Categories</a></li>
             <li><a href="{{route('tags.index')}}">Tags</a></li>

             <li><a href="{{route('location.index')}}">Locations</a></li>
             <li><a href="{{route('tuitioncategory.index')}}">Tuition Category</a></li>
            <li role="separator" class="divider"></li>
            <a href="{{route('logout')}}" >Logout</a>

          </ul>
        </li>