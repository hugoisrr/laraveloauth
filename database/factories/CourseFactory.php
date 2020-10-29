<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 4, $variableNbWords = true),
    ];
});
