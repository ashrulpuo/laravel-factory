<?php

use Illuminate\Database\Seeder;

class StudentprofilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\studentprofile', 1000)->create();
    }
}
