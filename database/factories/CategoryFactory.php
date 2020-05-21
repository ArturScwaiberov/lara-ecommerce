<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'short_description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'img_url' => $faker->image(public_path('storage\images'), 400, 300),
        'is_draft' => $faker->boolean($chanceOfGettingTrue = 50),
        'created_at' => now(),
    ];
});
