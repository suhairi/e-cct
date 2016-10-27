<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use PDF;

class DownloadController extends Controller
{
    public function user() {

        // return public_path();

        $users = User::all();

        $pdf = PDF::loadView('admin.user.pdf.index', compact('users'));
        return $pdf->stream(\Carbon\Carbon::date('d-m-Y') . '_Senarai Pengguna.pdf');

        return view('admin.user.pdf.index', compact('users'));


    }
}
