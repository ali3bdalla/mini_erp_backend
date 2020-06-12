<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tag;
use Faker\Generator as Faker;

$factory->define(Tag::class, function (Faker $faker) {
    return [

        'name' => json_encode([
            'ar' => $faker->name,
            'en' => $faker->name
        ]),
    ];
});
