<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {

    $users = App\Models\User::pluck('id')->toArray();
    $categories = App\Models\Category::pluck('id')->toArray();

    return [
        'title'=>$faker->realText(30),
        'content'=>$faker->realText(500),
        'image'=>'default.png',
        'user_id'=>$faker->randomElement($users),
        'category_id'=>$faker->randomElement($categories),
    ];
});
