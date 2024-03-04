<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
    <form action="{{ route('comment.update', $edit->post_id) }}" method="get" enctype="multipart/form-data">
      @csrf
       <h1>Edit Blog Post</h1>
        <textarea class="form-control" id="content" name="content" rows="5" required>{{$edit->comment}}</textarea>
        <div class = 'button'>
            <button type="submit" class="btn btn-primary">Save Changes</button> 
        </div>
    </form>
<div  class="form-text">
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
     <script>
        function goBack() {
          window.history.back();
        }
    </script>
<style>
    .button
    {
        margin: 2ch;
        display: flex;
        justify-content: center;
        
    }
    h1
    {
        display: flex;
        justify-content: center;

    }
   .form-control {
            width: 400px; /* Set desired width */
            margin: 0 auto; 

        }
</style>