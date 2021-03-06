<?php

use Faker\Generator as Faker;

$factory->define(App\Department::class, function (Faker $faker) {
    return [
        'title'       => $faker->unique()->randomElement(['TI', 'Marketing', 'RH']),
        'description' => $faker->sentence
    ];
});
