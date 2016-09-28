<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KomponenHasil extends Model
{
    protected $table	= 'komponen_hasil';
    protected $id		= 'id';
    public $fillable	= [
		'tangkai1', 'biji_per_tangkai1', 'peratus_bernas1', 'berat_seribu1',
		'tangkai2', 'biji_per_tangkai2', 'peratus_bernas2', 'berat_seribu2',
		'tangkai3', 'biji_per_tangkai3', 'peratus_bernas3', 'berat_seribu3',
		'komponen_utama_id'
	];

	public timestamps 	= false;

	public function komponenUtama() {
		return $this->belongsTo('App\KomponenUtama');
	}
}
