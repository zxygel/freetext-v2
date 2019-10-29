<?php
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Profile;
$factory->define(Profile::class, function (Faker $faker) {
    return [
        'contact' => $faker->phoneNumber,
        'gender' => $faker->randomElement(['Male','Female']),
        'birthdate' => $faker->date($format = 'Y-m-d', $max = 'now'), // secret
        'address' => $faker->address,

    ];
});
