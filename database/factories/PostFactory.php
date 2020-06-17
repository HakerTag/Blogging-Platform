<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Post;
use App\User;
use App\Category;

$factory->define(Post::class, function (Faker $faker) {
    return [
	    'user_id' => User::pluck('id')->random(),
	    'category_id' => Category::pluck('id')->random(),
	    'title' => $faker->realText(80),
	    'body' => $faker->realText(4000),
	    'likes' => $faker->numberBetween(0,100),
	    'dislikes' => $faker->numberBetween(0,100),
	    'image_url' => 'storage\images\posts\\'.$faker->numberBetween(1,13).'.jpg'
    ];
});
