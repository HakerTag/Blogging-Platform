<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'PagesController@index');

Route::get('/category/latest', 'CategoriesController@latest');
Route::get('/category/popular', 'CategoriesController@popular');
Route::get('/category/{category:name}', 'CategoriesController@show');

Route::get('posts/search', 'PostsController@search');


Route::get('/users/{user:name}', 'UsersController@show');

Route::middleware('auth')->group(function() {
	Route::get('posts/create', 'PostsController@create');
	Route::post('posts/create', 'PostsController@store');
	Route::get('/posts/{post}/edit', 'PostsController@edit');
	Route::get('/users/{user:name}/edit', 'UsersController@edit');
	Route::put('/posts/{post}/update', 'PostsController@update');
	Route::delete('/posts/{post}/delete', 'PostsController@destroy');
	Route::put('/users/{user:name}/update', 'UsersController@update');
	Route::delete('/users/{user:name}/delete', 'UsersController@destroy');
	Route::get('/comments/approve', 'CommentsController@index');
	Route::put('/comments/{comment}/approve', 'CommentsController@approve');
	Route::put('/comments/{comment}/disapprove', 'CommentsController@disapprove');
});

Route::middleware('auth','admin')->group(function() {
	Route::get('/admin/posts', 'AdminController@posts');
	Route::get('/admin/comments', 'AdminController@comments');
	Route::get('/admin/comments/{comment}', 'AdminController@commentShow');
	Route::get('/admin/users', 'AdminController@users');
	Route::delete('/comments/{comment}/delete', 'CommentsController@destroy');
});

Route::get('/posts/{post}', 'PostsController@show');
Route::post('/posts/{post}/comments', 'CommentsController@store');
Route::put('/posts/{post}/like', 'PostsController@like');
Route::put('/posts/{post}/dislike', 'PostsController@dislike');