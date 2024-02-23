<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Page</title>
</head>
<body>

  <div class="container">
    <div class="navbar">
       
        <a href="{{url('/dashboard')}}">Dashboard</a>
        <a href="{{url('/post/view')}}">Post</a>
        <a href="{{('/about')}}">About</a>
        
    </div>
      
    <!-- Blog Post -->
    <div class="blog-post">
      <h2 class="blog-title">Welcome To The Blog World!</h2>
      <div class="blog-content">
        
      </div>
    </div>
    <!-- Blog Post Form -->
    <div class="blog-form">
      <h2>Add a New Blog Post</h2>
      <form action="{{url('/blog/create')}}" method="post">
        @csrf
        <input type="text" name="title" placeholder="Title" required>
        <textarea name="content" placeholder="Content" rows="7" required></textarea>
        <input type="submit" value="Publish">
      </form>
    </div>
  </div>
  
</head>
<body>

</body>
</html>
<style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      
    }
    .navbar {
      background-color: #333; /* Background color */
      overflow: hidden;
      padding: 10px 20px;
    }

    .navbar a {
      float: left;
      color: #fff;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }

    .navbar a:hover {
      background-color: #ddd; /* Hover background color */
      color: #333; /* Hover text color */
    }

    .navbar a.active {
      background-color: #007bff; /* Active background color */
      color: #fff; /* Active text color */
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
 
  
 

