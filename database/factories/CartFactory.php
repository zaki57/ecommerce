<?php

use Faker\Generator as Faker;

$factory->define(App\Cart::class, function (Faker $faker) {
    return [
        
        
        'user_id' => $faker->randomNumber(4)
        
    ];
});
