<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Varieti;

class VarietiController extends Controller
{
    public function index() {

        $total = Varieti::count();

        return view('admin/varieti/index', compact('total'));
    }
}
