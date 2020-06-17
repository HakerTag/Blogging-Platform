<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;

class CategoriesController extends Controller
{
	public function latest() 
	{
		$posts = Post::latest()->paginate(9);
		$newestPosts = Post::take(5)->latest()->get();
		return view('categories.show', compact('posts', 'newestPosts'));
	}

	public function popular()
	{
		$posts = Post::orderBy('likes', 'desc')->paginate(9);
		$newestPosts = Post::take(5)->latest()->get();
		return view('categories.show', compact('posts', 'newestPosts'));
	}

    public function show(Category $category)
    {	
    	$posts = Post::where('category_id',$category->id)->latest()->paginate(9);
    	$newestPosts = Post::take(5)->latest()->get();

    	return view('categories.show', compact('posts', 'newestPosts'));
    }
}
