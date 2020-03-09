<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\GoodImage;
use Faker\Generator as Faker;

$factory->define(GoodImage::class, function (Faker $faker) {
    $date_time = $faker->date.' '.$faker->time;
    return [
        'cover' => true,
        'image' => $faker->imageUrl(386,352),
    ];
});
