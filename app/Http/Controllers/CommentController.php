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
        $posts = Post::findOrFail($id);

        return view('comment', compact('posts'));
    }
    public function displayComment()
    {
        $comments = Comment::all();
        return view('comment/dsiplay', compact('comments'));
    }

    public function editComment($id)
    {
        $edit = Comment::findOrFail($id);
        $edit->user_id = Auth::id();
        return view('comment', compact('edit'))->with('success', 'Edited Successfully');
    }

    public function deleteCommnet($id)
    {
        $comment = Comment::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Data Deleted successfully');
    }
}