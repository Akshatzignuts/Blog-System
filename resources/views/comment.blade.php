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
                        <input type="hidden" name="post_id" value={{$post->id}}>
                        <button class="btn btn-primary">Comment</button>       
                    </form>
                </div>
            @endforeach 
        </div>
    </div>
</div>