<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    /*
    // This function can be used to retrive all the post from all of the users
    */
    public function allpost()
    {
        $posts = Post::orderBy("created_at", "desc")->paginate(10);
        return view("post.index", compact("posts"));
    }

    public function addComment(Request $request)
    {

        $comment = new Comment;
        $comment->comments = $request['comment'];
        $comment->post_id = Auth::id();
        $comment->user_id = Auth::id();
        $comment->save();
        return redirect()->back()->with('message', 'Comment addded successfully');
    }

    public function blogIndex()
    {
        return view("blog");
    }
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
    public function display()
    {
        $user = Auth::User();
        $id = $user->id;
        $stored = Post::where('user_id', '=', $id)->get();
        return view('Post', compact('stored'));
    }
    public function edit($id)
    {
        $user = Auth::User();
        $title = Post::find($id);
        return view('edit', compact('title'))->with('success', 'Edited Successfully');
    }
    public function update(Request $request, $id)
    {
        $title = Post::find($id);
        // $title->title = $request->editTitle;
        // $title->content = $request->editContent;
        $title->update($request->only('title', 'content'));
        return redirect('post/view');
    }
    public function delete($id)
    {
        $title = Post::find($id)->delete();
        return redirect('post/view')->with('success', 'Data Deleted successfully');
    }
}
