<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </x-slot>

    
    <div>
        <span class = "button">
            <a href = "{{url('/blog')}}"><button class="btn-content" type="submit">Create Blogs</button></a>
            <a href = "{{url('/post/view')}}"><button class="btn-content" type="submit">My Blogs</button></a>
        <span>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8">
                <h2>Alls Blogs Posts</h2>

                <!--it can dispaly success message  -->
                @if(session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                @endif 

                <!--it can dispaly all blogs posted  -->
                @foreach($posts as $post)
                    <div class = "result grid-table">
                        <div class="title"><strong>Title :</strong>  {{ $post->title }}</div>
                        <div class="content"><strong>Content :</strong> {{ $post->content }}</div>
                        <form method="post" action = {{url('/all/blogs')}}>
                        @csrf
                            <div><textarea class="" id="comment" name="comment" rows="1" required></textarea></div>
                            <button class="btn btn-primary">Comment</button>
                        </form>
                    </div>
                @endforeach 
            </div>
        </div>
    </div>


</x-app-layout>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
    .button
    {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px;
        gap: 20px;

    }
    .btn-content
    {
        display:flex;
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      font-size: 16px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease; 
    }
    .blog-post {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
            background-color:wheat; 
        }
    .result
    {
        width: 100%;
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
        .comment-form {
    margin-top: 50px;
    max-width: 400px;
    margin-left: auto;
    margin-right: auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  .comment-form input[type="text"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  .comment-form input[type="text"]:focus {
    outline: none;
    border-color: #007bff;
  }

  .comment-form button {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .comment-form button:hover {
    background-color: #0056b3;
  }


 
</style>