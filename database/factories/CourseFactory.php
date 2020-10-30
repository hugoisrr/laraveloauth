<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    return [
        'version' => $faker->numberBetween($min = 1, $max = 14),
        'type' => $faker->randomElement(['Base', 'Course', 'Test']),
        'iap_id_apple' => $faker->word,
        'iap_id_google' => $faker->word,
        'live' => $faker->boolean,
    ];
});
