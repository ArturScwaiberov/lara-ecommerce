<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Restaurant;
use Faker\Generator as Faker;

$factory->define(Restaurant::class, function (Faker $faker) {
    return [
        'category_id' => $faker->randomDigitNot(0),
        'title' => $faker->word,
        'short_description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'logo_url' => $faker->image(public_path('storage\images'), 400, 300),
        'img_url' => $faker->image(public_path('storage\images'), 400, 300),
        'work_time' => $faker->time($format = 'H:i'),
        'average_check' => $faker->numberBetween($min = 200, $max = 3000),
        'delivery_cost' => $faker->numberBetween($min = 0, $max = 300),
        'average_delivery_time' => $faker->time($format = 'i'),
        'is_draft' => $faker->boolean($chanceOfGettingTrue = 50),
        'created_at' => now(),
    ];
});
