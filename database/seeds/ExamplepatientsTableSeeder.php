<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ExamplepatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker::create();
        // foreach (range(1, 10) as $index) {
        //     DB::table('example_patients')->insert([
        //         'fullname' => $faker->name,
        //         'date_of_admit' => $faker->date,
        //         'ward' => $faker->randomNumber,
        //     ]);
        // 
        factory('App\ExamplePatient', 10)->create();
    }
}
