<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Region::class, function (Faker $faker) {
    return [
        'name' => $faker->country,
    ];
});
