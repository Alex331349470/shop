<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedAdsData extends Migration
{
    public function up()
    {
        $ads = [
            [
                'image'        => 'https://lorempixel.com/1200/958/?42981',
            ],
            [
                'image'        => 'https://lorempixel.com/1200/958/?91059',
            ],
            [
                'image'        => 'https://lorempixel.com/1200/958/?67413',
            ],
        ];

        DB::table('ads')->insert($ads);
    }

    public function down()
    {
        DB::table('ads')->truncate();
    }
}