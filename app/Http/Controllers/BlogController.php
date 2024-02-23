<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogIndex()
    {
        return view("blog");
    }

    public function blogContent(Request $request)
    {
        $user = Auth::User();
        $save = new post;
        $save->title = $request['title'];
        $save->content = $request['content'];
        $save->user_id = Auth::id();
        $save->save();
        return redirect('post/view')->with('succes', 'Blog posted successfully');
    }
    public function display()
    {
        $user = Auth::User();
        $stored = post::all();
        return view('post', compact('stored'));
    }
    public function edit($id)
    {
        $user = Auth::User();
        $title = post::find($id);
        return view('edit', compact('title'));
    }
    public function update(Request $request, $id)
    {
        $title = Post::find($id);
        // $title->title = $request->editTitle;
        // $title->content = $request->editContent;

        $title->update($request->only('title', 'content'));
        
        return redirect('post/view')->with('status', 'Blog edited Successfully');
    }
    public function delete($id)
    {

        $title = post::find($id)->delete();
        return redirect('post/view')->with('status', 'Data Deleted successfully');
    }
}