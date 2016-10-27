<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Lokaliti;



class LokalitiController extends Controller
{
    public function daftar() {

        $localities = Lokaliti::orderby('wilayah_id', 'asc')
            ->paginate(10);
        $total = Lokaliti::count();

        return view('admin.lokaliti.index', compact('localities', 'total'));
    }
}
