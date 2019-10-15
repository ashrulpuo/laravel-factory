<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\orders;
use Faker\Generator as Faker;

$factory->define(orders::class, function (Faker $faker) {
    return [
        'orderDate' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'requiredOrder' => 'yes',
        'shipDate' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'status' => '1',
        'create_date' => Str::random(10),
        'update_date' => $faker->date($format = 'Y-m-d', $max = 'now')
    ];
});
