<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        //
        'name' => json_encode([
            'ar' => $faker->name,
            'en' => $faker->name
        ]),

        "description" => json_encode([
            "ar" => $faker->sentence,
            "en" => $faker->sentence
        ]),

        "price" => $faker->numberBetween(5, 1000)


    ];
});
