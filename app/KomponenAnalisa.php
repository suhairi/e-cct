<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KomponenAnalisa extends Model
{
    protected $table 	= 'komponen_analisa';
    protected $id		= 'id';
    public $fillable	= ['status', 'penyebab', 'faktor_lapangan', 'cadangan', 'komponen_utama_id'];

    public $timestamps	= false;

    public function komponenUtama() {
    	return $this->belongsTo('App\KomponenUtama');
    }
}
