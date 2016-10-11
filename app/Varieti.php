<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Varieti extends Model
{
    protected $table    = 'varieti';
    protected $id       = 'id';   
    protected $fillable = ['id', 'code', 'name'];

    public $timestamps  = false;
    

    
}
