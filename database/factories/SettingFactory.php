<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Setting;
use Faker\Generator as Faker;

$factory->define(Setting::class, function (Faker $faker) {

    return [
        'nomination_start_date' => $faker->date('Y-m-d H:i:s'),
        'nomination_end_date' => $faker->date('Y-m-d H:i:s'),
        'voting_start_date' => $faker->date('Y-m-d H:i:s'),
        'voting_end_date' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
