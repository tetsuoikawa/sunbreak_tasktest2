<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Sunbreak;
use Faker\Generator as Faker;

$factory->define(Sunbreak::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->name,
        'soubi1' => $faker->name,
        'soubi2' => $faker->name,
        'soubi3' => $faker->name,
        'soubi4' => $faker->name,
        'soubi5' => $faker->name,
        'buki' => $faker->name,
        'gender' => $faker->randomElement(['0', '1']),
        'contact' => $faker->realText(200),
    ];
});
