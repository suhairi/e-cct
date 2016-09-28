<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lokaliti extends Model
{
    protected $table 	= 'lokaliti';
    protected $id		= 'id';

    public $fillable	= ['code', 'name', 'wilayah_id'];

    public $timestamps	= false;

    public function wilayah() {
    	return $this->belongsTo('App\Wilayah', 'wilayah_id', 'id');
    }

    
}
