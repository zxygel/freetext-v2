<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Lesson;
use App\User;

$factory->define(Lesson::class, function (Faker $faker) {
    return [
        'title' => $faker->name, //make sure the number is less than the value of column
    	'content' => $faker->text,
    	'featured_image' => Str::random(6),
    	'user_id' => User::all()->random()->id
    ];
});
