<!DOCTYPE html>
<html>
    <head>
        <title>My Blog Page</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
            /* Custom CSS */
            .blog-post {
                border: 1px solid #ddd;
                border-radius: 5px;
                padding: 20px;
                margin-bottom: 20px;
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

            /* Modal CSS */
            #editModal .modal-dialog {
                max-width: 500px;
            }
        </style>
    </head>
        <body>
            <!-- Navbar section -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}">Home</a>
                        </li>
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
            <!-- Blog Post edit section-->
            <div class="modal-content">         
                    <div class="modal-body">
                        <form action="{{url('/edit').'/'.$title->id}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="form-group">
                                <label for="editTitle">Title</label>
                                <input type="text" class="form-control" id="title"  name="title" value ="{{$title->title}}"required >
                            </div>
                            <div class="form-group">
                                <label for="editContent">Content</label>
                                <textarea class="form-control" id="content" name="content" rows="5" required>{{$title->content}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </form>
                    </div>
            <div class="modal-footer">     
                    
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        </body>
</html>
