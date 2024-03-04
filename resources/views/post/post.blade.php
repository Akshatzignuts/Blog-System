
<!DOCTYPE html>
<html>
<head>
    <title>My Blog Page</title>
    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    {{-- Navbar section --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
          
              <li class="nav-item">
                  <a class="nav-link" href="{{url('/dashboard')}}">Dashboard</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{url('/blog')}}">Create Blog</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{url('/post/view')}}">My Blogs</a>
              </li> 
              <li class="nav-item">
                  <a class="nav-link" href="{{url('/all/blogs')}}">All Blogs</a>
              </li> 
          </ul> 
      </div>
      <div class="nav-item">
        <ul class="navbar-nav mr-auto">
        <li>
            <x-responsive-nav-link :href="route('profile.edit')">
                {{ __('Profile') }}
            </x-responsive-nav-link>
        </li>
        <li>
            {{-- Authentication --}}
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-responsive-nav-link>
            </form>
        </li>
        </ul> 
        </div>
    </div>
  </nav>
    <div class="container mt-4">
        <h2>My Blogs Posts</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($stored as $result)
                <div class="col">
                <div class="card h-100 w-100">
                    <div class="card-body">
                        {{-- This can be used to display the content and title of my post --}} 
                        <h5 class="card-title"><strong>Title :</strong>  {{ $result->title }}</h5>
                        <p class="card-text"><strong>Content :</strong>  {!! strip_tags(Str::substr($result->content, 0, 50    )) !!}</p>   
                    </div>   
                    {{-- This can be used to view , edit and delete redirection --}} 
                    <div class="btn-wraper">
                        <a href="{{url('view/blog/'. $result->id)}}" class="btn btn-success">View</a>
                        <a href="{{url('/edit/blog/'. $result->id)}}" class="btn btn-primary">Edit</a>
                        <a href="{{url('/post/delete') . "/" . $result->id}}  "  class="btn btn-danger">Delete</a>
                    </div>   
                </div>  
                </div>
            @endforeach
        </div>
    </div>
    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
</body>
</html>
<style>
    .btn-wraper{
    
    display: flex;
    justify-content: center;
    position: static;
    gap: 10px;
    padding-bottom: 10px;
    bottom: 15px;
    }
    .card
    {
        border-radius: 20px;
        background-color:w;      
    }
    .modal-content
    {
    word-wrap: break-word; 
    overflow: auto; 
    white-space: pre-line;
    height:auto; 
    overflow-y: auto;
    }
</style>