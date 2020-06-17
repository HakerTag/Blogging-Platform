<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;

class CommentsController extends Controller
{
    public function index()
    {
        $posts_id = auth()->user()->posts->pluck('id');
        $comments = Comment::where('approved',2)->whereIn('post_id',$posts_id)->paginate(10);

        return view('comments.index', compact('comments'));
    }

    public function store(Post $post)
    {
    	request()->validate([
    		'name' => ['required', 'min:2', 'max:50'],
    		'body' => ['required','min:6','max:500']
    	]);

    	Comment::create([
    		'name' => request('name'),
    		'body' => request('body'),
    		'post_id' => $post->id
    	]);

    	return back()->with('commentSent', 'Thank you for your comment. You comment is under review and soon will be approved.');
    }

    public function approve(Comment $comment)
    {
        Comment::where('id',$comment->id)->update(['approved' => 1]);

        if(auth()->user()->isAdmin()) {
            return redirect('/admin/comments')->with('commentApproved', 'Comment approved.');
        } else {
            return back()->with('commentApproved', 'Comment approved.');
        }
    }

    public function disapprove(Comment $comment)
    {
        Comment::where('id',$comment->id)->update(['approved' => 0]);
        
        if(auth()->user()->isAdmin()) {
            return redirect('/admin/comments')->with('commentDisapproved', 'Comment disapproved.');
        } else {
            return back()->with('commentDisapproved', 'Comment disapproved.');
        }
    }

    public function destroy(Comment $comment)
    {
        $this->authorize('admin', $comment);
        $comment->delete();

        return redirect('/admin/comments')->with('commentDeleted', 'Comment deleted.');
    }
}
