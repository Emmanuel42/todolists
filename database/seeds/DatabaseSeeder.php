<?php

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'prenom' => 'GreatAdmin',
                'nom' => 'admin',
                'email' => 'admin@la.fr',
                'mdp' => bcrypt('admin'),
            ]
            );
        
        
    }
}
