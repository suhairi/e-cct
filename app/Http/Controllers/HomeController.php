<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wilayah;
use App\Lokaliti;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->level == 'admin')
            return view('admin.index');
        else
            return view('user.index');
    }



    
}
