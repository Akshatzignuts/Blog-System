
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
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
    <div class="container mt-4">  
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <button class="btn btn-primary" onclick="goBack()">Back</button>
                
                <div class="row">
                    <div class="card" style="width: 100rem;">   
                        <div class="card-body">
                            <h2>Blog</h2>
                          <h1 class="card-title"><strong>Title :</strong> {{$posts->title}}</h1>
                          <p class="card-text"><strong>Content :</strong> {{$posts->content}}</p>
                        </div>
                            <form method="post" action = {{url('/comment/added')}}>
                            @csrf
                                <div><textarea class="text-content" id="comment" name="comment" rows="2"></textarea> <input type="hidden" name="post_id" value={{$posts->id}} required></textarea></div>
                                <button class="btn btn-primary">Comment</button>  
                               
                            </form>
                            @if(session('message'))
                            <div class="alert alert-success">
                           {{ session('message') }}
                             </div>
                            @endif 
                            <div class="container">
                                <h4 class="mt-4 text-center">Display Comments</h4>
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                            <div class="card mb-2">
                                                <div class="card-body d-flex justify-content-between align-items-center">
                                                    <p class="mb-0">{{}}</p>

                                                    <!-- Delete Button -->
                                                    <div class="mt-2">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                        
                                                  </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                              </div>
                                
                               
                            </div>
                        </div>
                    </div>
                </div>
                
                  
                     
                        </div>
                      </div>
                </div>       
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
    <script>
        function goBack() {
          window.history.back();
        }
      </script>
      
</body>
</html>

<style>
    .text-content
    {
        border-radius: 12px;
    }
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 20px;
    }
    .comment-container {
        max-width: 600px;
        margin: 0 auto;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }
    .comment-form textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 10px;
        resize: vertical;
    }
    .comment-form button {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }
    .comment {
        margin-bottom: 20px;
        border-bottom: 1px solid #ccc;
        padding-bottom: 10px;
    }
    .comment p {
        margin: 0;
    }
</style>
</head>
<body>




