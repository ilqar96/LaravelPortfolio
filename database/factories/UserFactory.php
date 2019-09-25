<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {

//    return [
//        'name' => 'Ilqar Huseynli',
//        'email' => 'ilqar@mail.ru',
//        'email_verified_at' => now(),
//        'role_id'=>4,
//        'password' => '$2y$10$kvwigdOtLx2oFmdMo3nqu.2Qgz5U9BlpStjZ/lXRfyoVU2Ma8kyZe', // password
//        'remember_token' => Str::random(10),
//    ];

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'role_id'=>rand(1,4),
        'password' => '$2y$10$kvwigdOtLx2oFmdMo3nqu.2Qgz5U9BlpStjZ/lXRfyoVU2Ma8kyZe', // password
        'remember_token' => Str::random(10),
    ];
});
