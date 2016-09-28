<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKomponenUtamaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komponen_utama', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('lokaliti_id', false, false);
            $table->integer('blok_id', false, false);
            $table->enum('fasa', ['1','2','3']);
            $table->string('name');
            $table->string('project_type');
            $table->string('kaedah_tanam');
            $table->string('variety');
            $table->integer('users_id', false, false);
            $table->string('lot_no', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('komponen_utama');
    }
}
