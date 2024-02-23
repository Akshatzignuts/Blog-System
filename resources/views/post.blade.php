<!DOCTYPE html>
<html>
<head>
    <title>My Blog Page</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .blog-post {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
            background-color:wheat; 
        }
        .result
        {
            width: 80%;
            background-color: wheat;
            padding: 10px;
            margin: 30px;
            border-radius: 25px;

        }
        .blog-post .title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .blog-post .content {
            font-size: 16px;
            line-height: 1.6;
        }

        .blog-post .id {
            font-size: 14px;
            color: #888;
            margin-bottom: 5px;
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
                    <a class="nav-link" href="{{url('/blog')}}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/dashboard')}}">Dashboard</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Blog Posts section -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8">
                <h2>Blog Posts</h2>
                @foreach($stored as $result)
                <div class = "result">
                    
                    <div class="title">Title:  {{ $result->title }}</div>
                    <div class="content">Content:  {{ $result->content }}</div>
                    <div class="row mt-3">
                         
                       
                            <div class="col">
                                <a href="{{url('/edit/blog'.$result->id)}}" class="btn btn-primary">Edit</a>
                            </div>
                            <div class="col">
                                <a href="{{url('/post/view')}}/{{$result->id}}" class="btn btn-danger">Delete</a>
                            </div>                
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
