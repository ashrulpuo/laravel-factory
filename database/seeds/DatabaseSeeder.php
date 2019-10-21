<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Model::unguard(); // Disable mass assignment

        $this->call(studentprofileSeeder::class);
        $this->call(ordersSeeder::class);
        $this->call(report::class);
        $this->call(users::class);
        $this->call(examplePatient::class);
        //Model::reguard(); // Enable mass assignment
    }
}
