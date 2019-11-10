<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Nomination;
use Faker\Generator as Faker;

$factory->define(Nomination::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'gender' => $faker->word,
        'linkedin_url' => $faker->word,
        'bio' => $faker->word,
        'business_name' => $faker->word,
        'reason_for_nomination' => $faker->word,
        'no_of_nominations' => $faker->randomDigitNotNull,
        'is_admin_selected' => $faker->word,
        'is_won' => $faker->word,
        'user_id' => $faker->randomDigitNotNull,
        'category_id' => $faker->randomDigitNotNull,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
