<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Post</title>
    {{-- Bootstrap CSS --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
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
                    <a class="nav-link" href="{{url('post/view')}}">My Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/all/blogs')}}">All Blogs</a>
                </li>
            </ul>
        </div>
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
                        <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </li>
            </ul>
        </div>
    </nav>
    <button class="btn btn-primary" onclick="goBack()">Back</button>
    <div class="container mt-5">
        <div class="row">
            <div class="card" style="width: 100rem;">
                <div class="card-body">
                    {{-- This can be used to display the content and title of post --}}
                    <h1 class="card-title"><strong>Title :</strong> {{$post->title}}</h1>
                    <p class="card-text"><strong>Content :</strong> {{$post->content}}</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Bootstrap JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
    <script>
        function goBack() {
        window.history.back();
    }
    </script>
</body>

</html>

<style>
    .btn {
        margin-left: 1ch;
        margin-top: 2ch;
    }
</style>