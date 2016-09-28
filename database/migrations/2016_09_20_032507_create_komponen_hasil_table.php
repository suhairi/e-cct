<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKomponenHasilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komponen_hasil', function(Blueprint $table) {

            $table->increments('id');
            $table->decimal('tangkai1', 7, 2);
            $table->decimal('biji_per_tangkai1', 7, 2);
            $table->decimal('peratus_bernas1', 7, 2);
            $table->decimal('berat_seribu1', 7, 2);
            $table->decimal('tangkai2', 7, 2);
            $table->decimal('biji_per_tangkai2', 7, 2);
            $table->decimal('peratus_bernas2', 7, 2);
            $table->decimal('berat_seribu2', 7, 2);
            $table->decimal('tangkai3', 7, 2);
            $table->decimal('biji_per_tangkai3', 7, 2);
            $table->decimal('peratus_bernas3', 7, 2);
            $table->decimal('berat_seribu3', 7, 2);
            $table->integer('komponen_utama_id', false, false);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('komponen_hasil');
    }
}
