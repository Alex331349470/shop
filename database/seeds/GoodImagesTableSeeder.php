<?php

use Illuminate\Database\Seeder;

class GoodImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $good_ids = \App\Models\Good::all()->pluck('id')->toArray();
        $faker = app(Faker\Generator::class);

        $images = factory(\App\Models\GoodImage::class)->times(50)->make()->each(function ($image,$index)use($good_ids,$faker){
            $image->good_id = $faker->randomElement($good_ids);
        });

        \App\Models\GoodImage::insert($images->toArray());
    }
}
