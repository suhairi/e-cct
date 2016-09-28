<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projek extends Model
{
    protected $table 	= 'projek';
    protected $id		= 'id';
    public $fillable	= ['code', 'name', 'lokaliti_id'];

    public $timestamps	= false;


    public function lokaliti() {
    	return $this->belongsTo('App\Lokaliti');
    }

}
