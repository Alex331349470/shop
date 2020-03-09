<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = factory(\App\Models\User::class)->times(1)->make();
        $user = \App\Models\User::find(1);
        $user->password = bcrypt('123456');
    }
}
