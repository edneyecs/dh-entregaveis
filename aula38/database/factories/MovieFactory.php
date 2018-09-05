<?php

use Faker\Generator as Faker;

$factory->define(App\Movie::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'rating' => $faker->numberBetween(1,10),
        'awards' => $faker->numberBetween(1,10),
        'release_date' => $faker->dateTimeBetween($startDate='-2 months', $endDate = 'now', $timezone = null),
        'revenue' => $faker-> randomFloat(),
    ];
});
