<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\studentprofile;
use Faker\Generator as Faker;

$factory->define(studentprofile::class, function (Faker $faker) {
    return [
        'appl_fname' => $faker->name,
        'appl_lname' => $faker->name,
        'appl_address1' =>  $faker->streetAddress,// secret
        'appl_postcode' => $faker->postcode,
        'appl_city' => $faker->city,
        'appl_state' => $faker->citySuffix,
        'appl_city_others' => $faker->cityPrefix,
        "appl_state_others" => $faker->state,
        'appl_country' => $faker->country,
        'appl_email' => $faker->safeEmail,
        "appl_email_personal" => $faker->safeEmail,
        'appl_username' => $faker->name,
        'appl_password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm',
        'appl_dob' => $faker->creditCardType,
        'appl_gender' => 'male',
        'create_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'update_date' => $faker->date($format = 'Y-m-d', $max = 'now')
    ];
});
