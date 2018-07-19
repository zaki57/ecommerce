<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [

        'name' => $faker->name,
        'category' => $faker->name,
        'price' => $faker->randomNumber(4),
        'desc' => $faker->name ,
        //
    ];
});
