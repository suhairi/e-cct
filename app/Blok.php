<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blok extends Model
{
    protected $table = 'blok';
    protected $id = 'id';
    protected $fillable = ['id', 'code', 'name'];
    public $timestamps = false;
}
