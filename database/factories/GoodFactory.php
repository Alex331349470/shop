<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Good;
use Faker\Generator as Faker;

$factory->define(Good::class, function (Faker $faker) {
    $date_time = $faker->date . ' ' . $faker->time;
    return [
        'title' => $faker->name,
        'description' => $faker->sentence(),
        'art' => $faker->userName,
        'time' => $faker->date,
        'size' => '10cm X 10cm',
        'quality'=> '布面油画',
        'on_sale' => true,
        'type' => '油画',
        'theme' => '风景',
        'style' => '具象表现',
        'content' => $faker->text(),
        'price' => '0.01',
        'stock' => 100,
        'sold_count' => 10,
        'review_count' => 10,
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
