<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        if(auth()->user()->isAdmin()) {
            $posts = Post::take(10)->latest()->get();
            $comments = Comment::take(10)->latest()->get();
            $users = User::take(10)->latest()->get();

            return view('admin.index', compact('posts', 'comments', 'users'));
        } else {
            return view('home');
        }
    }
}
