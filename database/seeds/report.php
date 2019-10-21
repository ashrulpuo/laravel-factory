<?php

use Illuminate\Database\Seeder;

class report extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\report', 100)->create();
    }
}
