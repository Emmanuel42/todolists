<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        
        for ($i= 0; $i<30; $i++){
        
        DB::table('users')->insert([
            'prenom' => $faker->firstName,
            'nom' => $faker->lastName,
            'email' => $faker->unique()->email,
            'mdp' => bcrypt('secret'),
         ]);
        
        }

        
//        User::create(
//             [
//                 'prenom' => 'GreatAdmin',
//                 'nom' => 'admin',
//                 'email' => 'admin@la.fr',
//                 'mdp' => bcrypt('admin'),
//                 'remember_token' => str_random(10),
//             ]
//             );
            
        
        
    }
}
