<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Ad::class, function (Faker $faker) {
    $date_time = $faker->date.' '.$faker->time;
    return [
        'image' => $faker->imageUrl(1200,958),
        'url' => 'http://www.baidu.com',
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
