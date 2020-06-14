<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\news;
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
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(news::class, function (Faker $faker) {
    return [
        //'id_news'=>$faker->unixTime($max = 'now'),
        'titrnews' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'textnews' => $faker->realText($maxNbChars = 65000),
        'summary' => $faker->text($maxNbChars = 80),
        'user_id' =>$faker->randomDigitNot(0),
        'category_id' => $faker->randomDigitNot(0),
        'img'=>$faker->imageUrl($width = 640, $height = 480),
        'img'=>$faker->imageUrl($width = 640, $height = 480),
        'views'=>$faker->numberBetween($min = 1, $max = 99999),
        'likes'=>$faker->numberBetween($min = 0, $max = 99999),
        'created_at'=>$faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),
    ];
});

