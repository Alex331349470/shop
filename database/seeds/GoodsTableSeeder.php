<?php

use Illuminate\Database\Seeder;

class GoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_ids = \App\Models\Category::all()->pluck('id')->toArray();

        $faker = app(Faker\Generator::class);

        $goods = factory(\App\Models\Good::class)->times(50)->make()->each(function ($good, $index) use ($category_ids, $faker) {
            $good->category_id = $faker->randomElement($category_ids);
        });

        \App\Models\Good::insert($goods->toArray());
    }
}
