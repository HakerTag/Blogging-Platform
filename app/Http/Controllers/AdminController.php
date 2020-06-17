<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\User;

class AdminController extends Controller
{
    public function posts()
    {
    	$posts = Post::latest()->paginate(15);

        return view('admin.posts.index', compact('posts'));
    }

    public function comments()
    {
    	$comments = Comment::latest()->paginate(15);

        return view('admin.comments.index', compact('comments'));
    }

    public function commentShow(Comment $comment)
    {
        return view('admin.comments.show', compact('comment'));
    }

    public function users()
    {
    	$users = User::latest()->paginate(15);

        return view('admin.users.index', compact('users'));
    }
}
