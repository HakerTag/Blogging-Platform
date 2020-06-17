<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Post;
use App\Comment;

class UsersController extends Controller
{
    public function show(User $user)
    {
        $newestPosts = Post::take(5)->latest()->get();

    	return view('users.show', compact('user', 'newestPosts'));
    }

    public function edit(User $user)
    {
        $this->authorize('view', $user);
    	return view('users.edit', compact('user'));
    }

    public function update(User $user) 
    {
        $this->authorize('view', $user);
    	request()->validate([
    		'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$user->id],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
    	]);

    	if(request('password') === auth()->user()->password)
    	{
    		$user->update([
    			'name' => request('name'),
    			'email' => request('email'),
    			'password' => request('password'),
    		]);
    	} else {
    		$user->update([
    			'name' => request('name'),
    			'email' => request('email'),
    			'password' => Hash::make(request('password')),
    		]);
    	}

        if(auth()->user()->isAdmin()) {
        	auth()->logout();
        	auth()->login($user);
        }

    	return redirect()->home()->with('profileUpdated','Profile informations are successfully updated.');
    }

    public function destroy(User $user)
    {
        $this->authorize('view', $user);
    	foreach ($user->posts as $post) {
            foreach ($post->comments as $comment) {
                Comment::deleteComment($comment);
            }

            Post::deletePost($post);
        }

        if(auth()->user()->isAdmin()) {
    	    if($user->delete()) {
                return redirect('admin/users')->with('userDeleted', 'Users account is successfully deleted.');
            }
        } else {
            if($user->delete()) {
        		return redirect('/login')->with('userDeleted', 'Users account is successfully deleted.');
            }
    	}
    }
}
