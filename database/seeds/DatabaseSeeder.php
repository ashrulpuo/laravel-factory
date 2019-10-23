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

        $this->call([
            StudentprofilesTableSeeder::class,
            OrdersTableSeeder::class,
            ReportsTableSeeder::class,
            UsersTableSeeder::class,
            ExamplepatientsTableSeeder::class,
        ]);
    }
}
