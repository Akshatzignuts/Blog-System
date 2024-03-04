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
        $comment = Comment::create(
            $request->only('comment', 'post_id')
                + [
                    'user_id' => auth()->user()->id
                ]
        ); // + used to concate the user_id data which to retrieve the user_id
        return redirect()->back()->with('message', 'Commented Successfully');
    }
    //This function can be used to view a single blog post
    public function view(Request $request, $id)
    {
        $comments = Post::with('comment')->findOrFail($id);
        return view('comment.comment', compact('comments'));
    }
    //This function can be used to edit comment on blog post
    public function editComment($id)
    {

        $edit = Comment::findOrFail($id);
        if (Auth::user()->id !== $edit->user_id) {
            session()->flash('error', 'You cannot edit this comment!');
            return redirect()->back();
        }
        return view('comment.editcomment', compact('edit'))->with('success', 'Edited Successfully');
    }
    //This function can be used to update your own blog 
    public function updateComment(Request $request, $id)
    {

        $edit = Comment::findOrFail($id);
        $edit->update($request->only('comment'));
        return redirect('view/blog/comment/' . $edit->post_id);
    }
    //This function can be used to delete comment on blog post
    public function deleteComment($id)
    {

        $comment = Comment::findOrFail($id);
        if (Auth::user()->id !== $comment->user_id) {
            session()->flash('error', 'You cannot delete this comment because it is not commented by you!');
            return redirect()->back();
        }
        $comment->delete();
        return redirect()->back()->with('success', 'Comment Deleted successfully');
    }
}
