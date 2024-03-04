
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    {{--This can be use to display navigation bar --}}
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
          {{--This can be used for log out and  profile view--}}
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
    

    {{-- Your other HTML content goes here --}}

    <div class="container mt-4">  
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <!--This can be use to go backto previous page -->
                <a  href = "{{url('all/blogs/')}}" class="btn btn-primary" ">Back </a> 
                <div class="row">
                 <div class="card" style="width: 100rem;">  
                        <div class="card-body text-center">
                                {{--This can be use to display heading of the page --}}
                                <h2>Blog</h2>
                                {{--This can be use to display single post which we want to see --}}
                            <h1 class="card-title"><strong>Title :</strong> {{$comments->title}}</h1>
                            <p class="card-text"><strong>Content :</strong> {{$comments->content}}</p>
                        </div>
                        <div class = "text-center">
                             {{--This can be use to add comment in database --}}
                            <form method="post" action = {{url('/comment/added')}}>
                                @csrf
                                <div><textarea class="text-content " id="comment" name="comment" rows="2"></textarea> <input type="hidden" name="post_id" value={{$comments->id}} required></textarea></div>
                                <button class="btn btn-primary">Comment</button>  
                            </form>
                        </div>
                            {{--This can be use to display display the success message --}}
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
                                            {{--This can be used to display commeny ,content and title of a specific function--}}
                                            @foreach ($comments->comment as $comment)
                                                <div class="card-body d-flex justify-content-between align-items-center">
                                                    <p class="mb-0">{{$comment->comment}}</p>
                                                    
                                                    {{-- Delete Button --}}
                                                    <div class="mt-2">
                                                        <a href="{{url('/delete/comment' . "/" . $comment->id)}}" class="btn btn-danger">Delete</a>
                                                        <a class="btn btn-primary" href="{{url('edit/comment/' . $comment->id)}}">Edit</a>
                                                    </div>
                                                    @if(session('success'))
                                                        <div class="alert alert-success">
                                                        {{ session('success') }}
                                                    @endif
                                                </div>
                                            @endforeach
                                            @if(session('error'))
                                                <div class="alert alert-danger">
                                                    {{ session('error') }}
                                                </div>
                                            @endif
                                        </div>
                                </div>
                            </div>
                        <div>                       
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




