<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Post</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Custom styles here */
    /* Add your custom CSS styles here if needed */
  </style>
</head>
<body>
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

    <div class="container mt-5">
        
    <div class="row">
        <div class="card" style="width: 100rem;">
           
            <div class="card-body">
                <button class="btn btn-primary" onclick="goBack()">Back</button>
              <h1 class="card-title"><strong>Title :</strong> {{$post->title}}</h1>
              <p class="card-text"><strong>Content :</strong> {{$post->content}}</p>
            </div>
        
        </div>
    </div>
    </div>

<!-- Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
<script>
  function goBack() {
    window.history.back();
  }
</script>
</body>
</html>

