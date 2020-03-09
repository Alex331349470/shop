<?php

use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(App\Models\User::class, function (Faker $faker) {
    $date_time = $faker->date . ' ' . $faker->time;
    return [
        'name' => 'yiguang',
        'phone' => '18742257174',
        'password' => $faker->password,
        'avatar' => 'https://cdn.learnku.com/uploads/images/201710/30/1/TrJS40Ey5k.png',
        'remember_token' => Str::random(10),
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
