<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Validator;
use Session;

class DaftarController extends Controller
{

    public function daftar() {

        // get Senarai Pengguna
        $users = User::where('email', '!=', 'suhairi81@gmail.com')
            ->orderBy('level', 'asc')
            ->orderBy('name', 'asc')
            ->get();

        return view('admin.user.index', compact('users'));
    }
}