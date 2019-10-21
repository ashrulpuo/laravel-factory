<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ExamplePatient;
use Faker\Generator as Faker;

$factory->define(ExamplePatient::class, function (Faker $faker) {
    return [
        'fullname' => 'ashrul',
        'date_of_admit' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'ward' => 'emergency',
    ];
});
