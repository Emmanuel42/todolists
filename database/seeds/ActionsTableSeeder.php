<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        
        for ($i= 0; $i<5; $i++){
            
            DB::table('actions')->insert([
                'nom_actions' => $faker->name,
                'type_actions' => $faker->title,
                'prio_actions' => $faker->array(['Faible', 'Moyenne', 'Elevée']),
                'date_actions' => $faker->date,
                'heure_actions' => $faker->time,
                'lieu_actions' => $faker->city,
                'descr_actions' => $faker->paragraphs(nb==3, ext_word_list==None),
                'ajout_doc_actions' => $faker->fileExtension,
                'fk_id_lists' => $faker->randomElement(),
            ]);
        }
    }
}
