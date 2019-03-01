<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('join_userslists', function (Blueprint $table) {
            $table->foreign('fk_id_lists')->references('id_lists')->on('lists');
            $table->foreign('fk_id_users')->references('id_users')->on('users');
        });
        
        Schema::table('actions', function (Blueprint $table) {
            $table->foreign('fk_id_lists')->references('id_lists')->on('lists');
        });
        
        Schema::table('commentaires', function (Blueprint $table) {
            $table->foreign('fk_id_actions')->references('id_actions')->on('actions');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foreign_keys');
    }
}
