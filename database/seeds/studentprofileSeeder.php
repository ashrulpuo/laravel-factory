<?php

use Illuminate\Database\Seeder;

class studentprofileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\studentprofile', 100000)->create();
    }
}
