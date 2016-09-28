<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KaedahTanam extends Model
{
    protected $table    = 'kaedah_tanam';
    protected $id       = 'id';
    protected $fillable = ['code', 'name'];
    public $timestamps  = false;

}
