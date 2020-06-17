<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Comment;
use App\Post;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'post_id' => Post::pluck('id')->random(),
        'name' => $faker->name,
        'body' => $faker->paragraph(5),
        'approved' => $faker->numberBetween(0,2)
    ];
});
