<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Wilayah;
use App\Lokaliti;
use App\KaedahTanam;
use App\Projek;
use App\Blok;

class RekodController extends Controller
{
    public function index() {

        $wilayah    = Wilayah::pluck('name', 'id');
        $lokaliti   = Lokaliti::pluck('code', 'id');
        $kaedah     = KaedahTanam::pluck('name', 'id');
        $projects   = Projek::pluck('name', 'id');
        $blocks     = Blok::pluck('name', 'id');

        // return $wilayah;

        return view('user.rekod', compact('wilayah', 'lokaliti', 'kaedah', 'projects', 'blocks'));
    }



}
