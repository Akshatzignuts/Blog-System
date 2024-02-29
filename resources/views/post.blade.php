
<!DOCTYPE html>
<html>
<head>
    <title>My Blog Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
</head>

<body>
    <!-- Navbar section -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

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
    </nav>
    <div class="container mt-4">
        <h2>My Blogs Posts</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($stored as $result)
            <div class="col">
            <div class="card h-100 w-100">
                <div class="card-body">
                    <h5 class="card-title"><strong>Title :</strong>  {{ $result->title }}</h5>
                    <p class="card-text"><strong>Content :</strong>  {!! strip_tags(Str::substr($result->content, 0, 50    )) !!}</p>   
                </div>   
                <div class="btn-wraper">
                    <a href="{{url('view/blog/'. $result->id)}}" class="btn btn-success">View</a>
                    <a href="{{url('/edit/blog/'. $result->id)}}" class="btn btn-primary">Edit</a>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button> 

                </div>   
            </div>  
            </div>
        @endforeach
    </div>

   
  <div class="modal fade"  id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollabl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel"><strong>Title :</strong>  {{ $result->title }}</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
        </div>
        <div>  
            <p class="modal-content "><strong>Content :</strong>  {{$result->content}}</p>     
        </div>
      </div>

    </div> 
  </div>
    
 
    
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Blog</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Are sure you want delete the blog?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <a href="{{url('/post/delete') . "/" . $result->id}}" class="btn btn-danger">Confirm</a>
      </div>
    </div>
  </div>
</div>
 
    
 <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
</body>
</html>
<style>
    
</style>