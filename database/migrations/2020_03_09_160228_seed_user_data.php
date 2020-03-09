<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SeedUserData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $faker = app(Faker\Generator::class);
        $date_time = $faker->date.' '.$faker->time;
        $user = [
            'name' => 'yiduang',
            'phone' => '18742257174',
            'avatar' => 'https://cdn.learnku.com/uploads/images/201710/30/1/TrJS40Ey5k.png',
            'password' => bcrypt('123456'),
            'remember_token' => 'sdfadfhdfghfghjghjkghjlkghjklhjktgewrteytuytjncvbvc',
            'created_at' => $date_time,
            'updated_at' => $date_time,
        ];

        DB::table('users')->insert($user);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('users')->truncate();
    }
}
