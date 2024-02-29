<?php



namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    //This function can be used to add comment on blog post

    public function addComment(Request $request)
    {

        $comment = new Comment;
        $comment->comment = $request['comment'];
        $comment->post_id = $request['post_id'];
        $comment->user_id = Auth::id();
        $comment->save();
        return redirect()->back()->with('message', 'Commented Successfully');
    }
    public function view(Request $request, $id)
    {
        $posts = Post::find($id);
        return view('comment', compact('posts'));
    }
    public function displayComment(Request $request)
    {
        $display = Comment::all();
        $comments = $display->comment;
        return view('comment', compact('comments'));
    }
    public function editComment()
    {
        
    }
    
}