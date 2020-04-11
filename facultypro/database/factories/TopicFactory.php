<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\topic;
use Faker\Generator as Faker;

$factory->define(topic::class, function (Faker $faker) {
    return [
        'group' => $faker->numberBetween($min = 0, $max = 5),
        'depart' => $faker->numberBetween($min = 0, $max = 2),
        'subject' => $faker->numberBetween($min = 1, $max = 4),
        'title' => $faker->text(20),
        'lecture' => $faker->text(20),
        'lecturedown' => $faker->text(20),
        'secpdf' => $faker->text(20),
        'secvedio' => $faker->text(20),
    ];
});
