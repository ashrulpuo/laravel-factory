<?php

use Illuminate\Database\Seeder;

class examplePatient extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\ExamplePatient', 5)->create();
    }
}
