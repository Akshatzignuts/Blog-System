<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    // This function can be used to retrive all the post from all of the users
    public function allpost()
    {
        $posts = Post::orderBy("created_at", "desc")->paginate(10);
        return view("post.allpost", compact("posts"));
    }

    //This function can be used to just see the Blog page where we can write the code 
    public function blogIndex()
    {
        return view("blog");
    }
    //This function can be used store the data of  blog posted
    public function blogContent(Request $request)
    {
        $request->validate(
            [
                'title' => 'required',
                'content' => 'required'
            ]
        );
        $user = Post::create($request->only('title', 'content')
            + ['user_id' => auth()->user()->id]);
        return redirect('post/view')->with('message', 'Blog posted successfully');
    }
    //This function can be used to display your own data which is posted by user itself
    public function display()
    {
        $user = Auth::User();
        $id = $user->id;
        $stored = Post::where('user_id', '=', $id)->get();
        return view('post.post  ', compact('stored'));
    }

    //This function can be used to edit your own blog 
    public function edit($id)
    {
        $title = Post::findOrFail($id);
        return view('edit.edit', compact('title'))->with('success', 'Edited Successfully');
    }
    //This function can be used to view your own blog 
    public function view(Request $request, $id)
    {

        $post = Post::find($id);
        return view('post.view', compact('post'));
    }
    //This function can be used to update your edited blog
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
        $title = Post::findOrFail($id);
        $title->update($request->only('title', 'content'));
        return redirect('post/view');
    }
    //This function can be used to delete your blog
    public function delete($id)
    {

        // dd($id);
        $title = Post::findOrFail($id)->delete();

        return redirect('post/view')->with('success', 'Data Deleted successfully');
    }
}
