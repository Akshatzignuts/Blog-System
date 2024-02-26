<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="">
        <div class= "button">
            <a href = "{{url('/blog')}}"><button class="btn-content" type="submit">Create Blogs</button></a>
          </div>
          <div class= "button">
            <a href = "{{url('/post/view')}}"><button class="btn-content" type="submit">My Blogs</button></a>
          </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8">
                <h2>My Blogs Posts</h2>

                
                @foreach($posts as $post)
                <div class = "result">
                    
                    <div class="title">Title:  {{ $post->title }}</div>
                    <div class="content">Content:  {{ $post->content }}</div>
                    <form>
                       
                        <div><textarea class="" id="comment" name="comment" rows="1" required></textarea></div>
                        <button class="btn btn-primary">Comment</button>
                    </form>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</body>
</html>