<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKomponenAnalisaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komponen_analisa', function(Blueprint $table) {
            $table->increments('id');            
            $table->string('status');
            $table->longtext('penyebab');
            $table->longtext('faktor_lapangan');
            $table->longText('cadangan');
            $table->integer('komponen_hasil_id', false, false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('komponen_analisa');
    }
}
