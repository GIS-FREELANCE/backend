<?php

use App\Model\Level\Level;
use Faker\Generator as Faker;

$factory->define(App\Model\Level\Population::class, function (Faker $faker) {
    return [
        'level_id' => function(){
            return Level::all()->random();
        },
        'population' => $faker->name,
    ];
});
