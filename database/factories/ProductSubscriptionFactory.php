<?php

use Faker\Generator as Faker;

$factory->define(App\Psubscription::class, function (Faker $faker) {
    return [
        //
        'product_id' => $faker->randomElement(['1','2','3','4','5','6','7','8','9','10']),
        'units' => $faker->randomDigitNotNull,
        'start_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'end_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'staff_id' => $faker->randomElement(['1','2','3']),
        
    ];
});
