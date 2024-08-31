<?php

/** @var Factory $factory */

use App\Models\Subscription;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Subscription::class, function (Faker $faker) {

    return [
        'reference' => $faker->word,
        'service' => $faker->word,
        'home_address' => $faker->word,
        'school_address' => $faker->word,
        'trajectory' => $faker->word,
        'phone_number' => $faker->word,
        'children_number' => $faker->randomDigitNotNull,
        'enforcement_date' => $faker->word,
        'request_date' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
