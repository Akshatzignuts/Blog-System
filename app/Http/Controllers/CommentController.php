<?php



namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    //This function can be used to add comment on blog post

    public function addComment(Request $request)
    {
        $comment = new Comment;
        $comment->comment = $request['comment'];
        $comment->post_id =  $request['post_id'];
        $comment->user_id = Auth::id();
        $comment->save();
        return redirect()->back()->with('message', 'Comment addded successfully');
    }
    public function displayComment()
    {
        $comments = Comment::all();
        return view('post.index', compact('comments'));
    }
    public function editComment($id)
    {
        $comment = Comment::find($id);
        return view('post.index', compact('comment'))->with('success', 'Edited Successfully');
    }
    
    
}