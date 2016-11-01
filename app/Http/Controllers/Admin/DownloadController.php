<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use PDF;

use Carbon\Carbon;

use App\Lokaliti;

class DownloadController extends Controller
{
    public function user() {

        $users = User::orderBy('level', 'asc')->get();

        $pdf = PDF::loadView('admin.user.pdf.index', compact('users'));
        return $pdf->stream();

        return view('admin.user.pdf.index', compact('users'));
    }

    public function lokaliti() {

        $localities = Lokaliti::orderby('wilayah_id', 'asc')->get();
        $total = Lokaliti::count();

        $pdf = PDF::loadView('admin.lokaliti.pdf.index', compact('localities', 'total'));
        return $pdf->stream(Carbon::now() . '_Senarai Lokaliti.pdf');

        return view('admin.lokaliti.pdf.index', compact('localities', 'total'));

    }


}
