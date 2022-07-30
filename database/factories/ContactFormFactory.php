<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ContactForm3;
use Faker\Generator as Faker;

$factory->define(ContactForm3::class, function (Faker $faker) {
    return [
        //
        'your_name' => $faker->name,
        'email' => $faker->unique()->email,
        'url' => $faker->url,
        'gender' => $faker->randomElement(['0', '1']),
        'age' => $faker->numberBetween($min = 1, $max = 6),
        'contact' => $faker->realText(200),

    ];
});
