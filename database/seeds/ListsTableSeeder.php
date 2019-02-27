<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ListsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        
        for ($i= 0; $i<4; $i++){
            
            DB::table('lists')->insert([
                'nom_lists' => $faker->words(array(['Courses', 'Finances', 'Projet Front-end', 'Projet back-end'])),
            ]);
      }
    }
    
}