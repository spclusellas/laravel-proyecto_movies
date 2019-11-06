<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;

$factory->define(App\Actor::class, function (Faker $faker) {
    return [
      'first_name' => $faker->firstNameMale,
      'last_name' => $faker->lastName,
      'rating' => $faker->numberBetween(0, 10),
    ];
});
