<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blok extends Model
{
    protected $table = 'blok';
    protected $id = 'id';
    protected $fillable = ['id', 'code', 'name', 'lokaliti_id'];
    public $timestamps = false;

    public function lokaliti() {
        return $this->belongsTo('App\Lokaliti', 'lokaliti_id', 'id');
    }
}
