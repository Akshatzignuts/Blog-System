<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;

class BlogController extends Controller
{


    // This function can be used to retrive all the post from all of the users
    public function allpost()
    {
        $posts = Post::orderBy("created_at", "desc")->paginate(10);
        return view("post.index", compact("posts"));
    }
    //This function can be used to add comment on blog post
    public function addComment(Request $request)
    {
        $comment = new Comment;
        $comment->comments = $request['comment'];
        $comment->post_id = Auth::id();
        $comment->user_id = Auth::id();
        $comment->save();
        return redirect()->back()->with('message', 'Comment addded successfully');
    }
    //This function can be used to just see the Blog page where we can write the code 
    public function blogIndex()
    {
        return view("blog");
    }
    //This function can be used store the data of  blog posted
    public function blogContent(Request $request)
    {
        $user = Auth::User();
        $save = new Post;
        $save->title = $request['title'];
        $save->content = $request['content'];
        $save->user_id = Auth::id();
        $save->save();
        return redirect('post/view')->with('message', 'Blog posted successfully');
    }
    //This function can be used to display your own data which is posted by user itself
    public function display()
    {
        $user = Auth::User();
        $id = $user->id;
        $stored = Post::where('user_id', '=', $id)->get();
        return view('Post', compact('stored'));
    }
    //This function can be used to edit your own blog 
    public function edit($id)
    {
        $user = Auth::User();
        $title = Post::find($id);
        return view('edit', compact('title'))->with('success', 'Edited Successfully');
    }
    //This function can be used to update your edited blog
    public function update(Request $request, $id)
    {
        $title = Post::find($id);
        // $title->title = $request->editTitle;
        // $title->content = $request->editContent;
        $title->update($request->only('title', 'content'));
        return redirect('post/view');
    }
    //This function can be used to delete your blog
    public function delete($id)
    {
        $title = Post::find($id)->delete();
        return redirect('post/view')->with('success', 'Data Deleted successfully');
    }
}
