<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Voting;
use Faker\Generator as Faker;

$factory->define(Voting::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'nomination_id' => $faker->randomDigitNotNull,
        'category_id' => $faker->randomDigitNotNull,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
