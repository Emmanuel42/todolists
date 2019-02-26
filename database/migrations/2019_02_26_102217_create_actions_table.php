<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actions', function (Blueprint $table) {
            $table->increments('id_actions');
            $table->string('nom_actions');
            $table->string('type_actions');
            $table->enum('prio_actions', array('Faible', 'Moyenne', 'Elevée'));
            $table->date('date_actions');
            $table->time('heure_actions');
            $table->string('lieu_actions');
            $table->string('descr_actions');
            $table->string('ajout_doc_actions');
            $table->integer('fk_id_lists');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actions');
    }
}
