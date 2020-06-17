<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function index()
    {
    	$latestPosts = Post::take(7)->latest()->get();
    	$businessPosts = Post::take(7)->where('category_id',1)->latest()->get();
        $sportPosts = Post::take(7)->where('category_id',2)->latest()->get();
        $culturePosts = Post::take(7)->where('category_id',3)->latest()->get();
        $politicsPosts = Post::take(7)->where('category_id',4)->latest()->get();
        $sciencePosts = Post::take(7)->where('category_id',5)->latest()->get();
        $healthPosts = Post::take(7)->where('category_id',6)->latest()->get();
        $stylePosts = Post::take(7)->where('category_id',7)->latest()->get();
        $travelPosts = Post::take(7)->where('category_id',8)->latest()->get();

        $newestPosts = Post::take(5)->latest()->get();
        $popularPosts = Post::take(6)->where('created_at','>',date('Y-m-d', strtotime("-7 days")))->orderBy('likes','desc')->get();

        if($popularPosts->count() < 6) {
            $popularPosts = Post::take(6)->where('created_at','>',date('Y-m-d', strtotime("-14 days")))->orderBy('likes','desc')->get();

            if($popularPosts->count() < 6) {
                $popularPosts = Post::take(6)->orderBy('likes','desc')->get();
                $mostPopularPost = $popularPosts->shift();
            }
        }

    	return view('index', compact('popularPosts','newestPosts' , 'latestPosts', 'businessPosts','sportPosts','culturePosts','politicsPosts','sciencePosts','healthPosts','stylePosts','travelPosts'));
    }
}
