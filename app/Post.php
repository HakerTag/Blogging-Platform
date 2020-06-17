<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Comment;
use App\Category;
use Cookie;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    protected $fillable = ['user_id','category_id','title','body','likes','dislikes','image_url'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

    public static function votePost($post, $first_key, $second_key) {
        $cookie_get = Cookie::get('vote');
        $cookie_get = json_decode($cookie_get);
        
        if(!empty($cookie_get)) {
            if($first_key == 'likes') {
                $first_cookie = $cookie_get[0];
                $second_cookie = $cookie_get[1];
            } else {
                $first_cookie = $cookie_get[1];
                $second_cookie = $cookie_get[0];
            }
        } else {
            $first_cookie = array();
            $second_cookie = array();
        }
        if(empty($first_cookie)) {
            if(in_array($post->id, $second_cookie)) {
                $key_to_delete = array_search($post->id, $second_cookie);
                unset($second_cookie[$key_to_delete]);
                Post::where('id',$post->id)->decrement($second_key,1);
            }

            $first_cookie = array($post->id);
            Post::where('id',$post->id)->increment($first_key,1);
        } else {
            if(!(in_array($post->id, $first_cookie))) {
                if(in_array($post->id, $second_cookie)) {
                    $key_to_delete = array_search($post->id, $second_cookie);
                    unset($second_cookie[$key_to_delete]);
                    Post::where('id',$post->id)->decrement($second_key,1);
                }
                array_push($first_cookie, $post->id);
                Post::where('id',$post->id)->increment($first_key,1);
            }
        }

        if($first_key == 'likes') {
            $cookie_value = json_encode(array($first_cookie, $second_cookie));
        } else {
            $cookie_value = json_encode(array($second_cookie, $first_cookie));
        }
        $cookie = cookie('vote', $cookie_value, 45000);

        return $cookie;
    }

    public static function deletePost(Post $post) 
    {
        Post::where('id', $post->id)->delete();
        Storage::disk('images')->delete(substr($post->image_url, 21));
    }
}
