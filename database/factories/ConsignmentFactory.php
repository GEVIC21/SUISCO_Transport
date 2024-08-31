<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Consignment;
use Faker\Generator as Faker;

$factory->define(Consignment::class, function (Faker $faker) {

    return [
        'last_name' => $faker->word,
        'first_name' => $faker->word,
        'email' => $faker->word,
        'phone_number' => $faker->word,
        'seats_number' => $faker->word,
        'details' => $faker->text,
        'enforcement_date' => $faker->word,
        'request_date' => $faker->date('Y-m-d H:i:s'),
        'children_number' => $faker->randomDigitNotNull,
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
