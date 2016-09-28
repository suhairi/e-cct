<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KomponenUtama extends Model
{
    protected $table	= 'komponen_utama';
    protected $id		= 'id';
    public $fillable	= ['lokaliti_id', 'name', 'project_type', 'kaedah_tanam', 'variety', 'lot_no'];
    public $timestamps	= false;

}
