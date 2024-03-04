

<!-- Latest compiled and minified JavaScript -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Blog</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    {{--This can be used for navigation bar--}}
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
  </nav>
  <div class="container"  >  
    {{--This can be used for Heading of the page --}}
    <div class="blog-post">
      <h2 class="blog-title">Edit Blog Post</h2>
    </div>
    {{--This can be used for edit blog post form--}}
    <div class="blog-form">
      <h2>Edit Your Blog Post</h2>
      <form action="{{url('/edit').'/'.$title->id}}" method="POST" enctype="multipart/form-data">
        @csrf  
        <div class="form-group">
            <label for="editTitle"><strong>Title</strong></label>
            <input type="text" class="form-control" id="title"  name="title" value ="{{$title->title}}"required >
        </div>
        <div class="form-group">
            <label for="editContent"><strong>Content</strong></label>
            <textarea class="form-control" id="content" name="content" rows="5" required>{{$title->content}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
    </div>
  </div> 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</body>
</html>

<!-- css for page  -->
<style>
body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      
    } 
    h2
    {
        font-family: Arial, sans-serif;
      font-size: 24px;
      font-weight: bold;
      color: #333;
      text-align: center;
      text-transform: uppercase;
      padding: 10px;
      background-color: #007bff; /* Background color */
      color: #fff; /* Text color */
      border-top-left-radius: 5px;
      border-top-right-radius: 5px;
      border-bottom: 2px solid #0056b3; /* Bottom border */
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .blog-title
    {
        font-family: Arial, sans-serif;
      font-size: 36px;
      font-weight: bold;
      color: #333;
      text-align: center;
      text-transform: uppercase;
      background-color: #f8f9fa; /* Background color */
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .container {
      
      margin: 20px auto;
      padding: 0 20px;
      
    }
    .blog-post {
      margin-bottom: 40px;
    }
    .blog-title {
      font-size: 24px;
      font-weight: bold;
      color: #333;
      margin-bottom: 10px;
    }
    .blog-content {
      font-size: 16px;
      line-height: 1.6;
      color: #666;
    }
    .blog-content p {
      margin-bottom: 10px;
    }
    /* Styles for form */
    .blog-form {
      margin-bottom: 40px;
    }
    .blog-form input[type="text"],
    .blog-form textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }

    .blog-form input[type="submit"] {
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      padding: 10px 20px;
      cursor: pointer;
    }

    .blog-form input[type="submit"]:hover {
      background-color: #0056b3;
    }
  </style>