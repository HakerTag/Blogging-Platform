<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    public function show(Post $post) {
        $similarPosts = Post::take(4)->where('category_id', $post->category_id)->where('id','!=',$post->id)->latest()->get();
        $comments= $post->comments->where('approved',1);
        $newestPosts = Post::take(5)->latest()->get();

    	return view('posts.show', compact('post', 'similarPosts', 'comments', 'newestPosts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function edit(Post $post)
    {
        $this->authorize('view', $post);
        return view('posts.edit', compact('post'));
    }

    public function search() 
    {
    	$posts = Post::where('title','LIKE','%'.request('keyword').'%')->paginate(9);
    	$posts->withPath('search?keyword='.request('keyword'));
    	$newestPosts = Post::take(5)->latest()->get();

    	return view('posts.search', compact('posts', 'newestPosts'));
    }

    public function store()
    {
        request()->validate([
            'title' => ['required','min:6','max:150'],
            'body' => ['required','min:240','max:20000'],
            'category' => ['required'],
            'image' => ['required', 'mimes:jpeg,png', 'dimensions:min_width=480,max_width=1280,min_height=360,max_height=960', ],
        ]);

        $image = request()->file('image');
        $imageName = 'storage/images/posts/'.$image->hashName();
        Storage::disk('images')->put('/',$image);

        Post::create([
            'user_id' => auth()->id(),
            'category_id' => (int)request('category'),
            'title' => request('title'),
            'body' => request('body'),
            'likes' => 0,
            'dislikes' => 0,
            'image_url' => $imageName 
        ]);

        return redirect('/home')->with('postInserted', 'You are successfully created new post.');
    }

    public function update(Post $post)
    {
        $this->authorize('view', $post);
        request()->validate([
            'title' => ['required','min:6','max:150'],
            'body' => ['required','min:240','max:20000'],
            'category' => ['required'],
        ]);

        if(request('image')) {
            request()->validate([
                'image' => ['required', 'mimes:jpeg,png', 'dimensions:min_width=480,max_width=1280,min_height=360,max_height=960', ]
            ]);

            $image = request()->file('image');
            $imageName = 'storage/images/posts/'.$image->hashName();
            Storage::disk('images')->put('/',$image);
            Storage::disk('images')->delete(substr($post->image_url,21));

            Post::where('id', $post->id)->update([
                'title' => request('title'),
                'body' => request('body'),
                'category_id' => request('category'),
                'image_url' => $imageName
            ]);
        } else {
            Post::where('id', $post->id)->update([
                'title' => request('title'),
                'body' => request('body'),
                'category_id' => request('category'),
            ]);
        }

        return redirect('/home')->with('postUpdated', 'Post is successfully updated.');
    }

    public function destroy(Post $post) 
    {
        $this->authorize('view', $post);
        foreach ($post->comments as $comment) {
            Comment::deleteComment($comment);
        }
        Post::deletePost($post);

        if(auth()->user()->isAdmin()) {
            return redirect('/admin/posts')->with('postDeleted', 'Post is successfully deleted');
        } else {
            return redirect('/home')->with('postDeleted', 'Post is successfully deleted');
        }
    }

    public function like(Post $post)
    {
        return back()->withCookie(Post::votePost($post, 'likes', 'dislikes'));
    }

    public function dislike(Post $post)
    {
        return back()->withCookie(Post::votePost($post, 'dislikes', 'likes'));
    }
}
