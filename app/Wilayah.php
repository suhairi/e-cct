<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    protected $table 	= 'wilayah';
    protected $id		= 'id';
    public $fillable	= ['code', 'name'];

    public $timestamps	= false;

    public function lokaliti() {
    	return $this->hasMany('App\Lokaliti');
    }
}
