<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\report;
use Faker\Generator as Faker;

$factory->define(report::class, function (Faker $faker) {
    return [
        'title_report' => "report number" . $faker->numberBetween($min = 1000, $max = 9000),
        'description_report' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'document_report' => '13b73edae8443990be1aa8f1a483bc27.jpg',
        'request_from' => '13b73edae8443990be1aa8f1a483bc27.jpg',
        'datetime' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'status_report' => 'completed'
    ];
});
