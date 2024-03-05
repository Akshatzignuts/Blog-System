<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
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
        {{--This can be used for log out and profile view--}}
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
        </div>
    </nav>

    <form action="{{url('/comment/edit/' . $edit->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <h1>Edit Comment</h1>
        <textarea class="form-control" id="content" name="comment" rows="5" required>{{$edit->comment}}</textarea>
        <div class='button'>
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
    </form>
    <div class="form-text">
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
<script>
    function goBack() {
          window.history.back();
        }
</script>
<style>
    .button {
        margin: 2ch;
        display: flex;
        justify-content: center;

    }

    h1 {
        display: flex;
        justify-content: center;

    }

    .form-control {
        width: 400px;
        /* Set desired width */
        margin: 0 auto;

    }
</style>