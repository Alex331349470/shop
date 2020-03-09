<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Ad;
use Faker\Generator as Faker;

$factory->define(Ad::class, function (Faker $faker) {
    $date_time = $faker->date . ' ' . $faker->time;

    return [
        'image' => $faker->imageUrl(1200, 958),
        'url' => $faker->url,
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
