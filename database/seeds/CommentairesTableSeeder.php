<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentairesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        
        for ($i= 0; $i<10; $i++){
            
            DB::table('commentaires')->insert([
                'coms' => $faker->text(max_nb_chars==255, ext_word_list==None),
                'fk_id_actions' => $faker->randomElement(),
            ]);
        }
    }
}