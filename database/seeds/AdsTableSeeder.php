<?php

use Illuminate\Database\Seeder;

class AdsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ads = factory(\App\Models\Ad::class)->times(3)->make()->toArray();

        \App\Models\Ad::insert($ads);
    }
}
