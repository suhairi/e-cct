<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use PDF;

use Carbon\Carbon;

use App\Lokaliti;
use App\KaedahTanam;
use App\Varieti;
use App\Projek;
use App\Blok;

class DownloadController extends Controller
{
    public function user() {

        $rowPerPage = 18;

        $users = User::orderBy('level', 'asc')->get();
        $total = User::count();

        if($total % $rowPerPage == 0)
            $pages = $total / $rowPerPage;
        else
            $pages = (int)(($total / $rowPerPage) + 1);

        $pdf = PDF::loadView('admin.user.pdf.index', compact('users', 'total', 'pages', 'rowPerPage'));
        return $pdf->stream(mt_rand(1, 10) . ' - ' . date('m-Y') . '_Senarai Pengguna.pdf');

    }

    public function lokaliti() {

        $rowPerPage = 18;

        $localities = Lokaliti::orderby('wilayah_id', 'asc')->get();
        $total = Lokaliti::count();

        if($total % $rowPerPage == 0)
            $pages = $total / $rowPerPage;
        else
            $pages = (int)(($total / $rowPerPage) + 1);

        $pdf = PDF::loadView('admin.lokaliti.pdf.index', compact('localities', 'total', 'pages', 'rowPerPage'));
        return $pdf->stream(mt_rand(1, 10) . ' - ' . Carbon::now() . '_Senarai Lokaliti.pdf');
    }

    public function kaedah() {

        $rowPerPage = 18;

        $kaedahs = KaedahTanam::orderby('id', 'asc')->get();
        $total = KaedahTanam::count();

        if($total % $rowPerPage == 0)
            $pages = $total / $rowPerPage;
        else
            $pages = (int)(($total / $rowPerPage) + 1);

        $pdf = PDF::loadView('admin.kaedah_tanam.pdf.index', compact('kaedahs', 'total', 'pages', 'rowPerPage'));
        return $pdf->stream(mt_rand(1, 10) . ' - ' . Carbon::now() . '_Senarai Kaedah Tanam.pdf');
    }

    public function varieti() {

        $rowPerPage = 18;

        $varieties = Varieti::orderby('name', 'asc')->get();
        $total = Varieti::count();

        if($total % $rowPerPage == 0)
            $pages = $total / $rowPerPage;
        else
            $pages = (int)(($total / $rowPerPage) + 1);

        $pdf = PDF::loadView('admin.varieti.pdf.index', compact('varieties', 'total', 'pages', 'rowPerPage'));
        return $pdf->stream(mt_rand(1, 10) . ' - ' . Carbon::now() . '_Senarai Varieti.pdf');
    }

    public function projek() {

        $rowPerPage = 18;

        $projects = Projek::orderby('name', 'asc')->take(200)->get();
        $total = Projek::count();

        if($total % $rowPerPage == 0)
            $pages = $total / $rowPerPage;
        else
            $pages = (int)(($total / $rowPerPage) + 1);

        $pdf = PDF::loadView('admin.projek.pdf.index', compact('projects', 'total', 'pages', 'rowPerPage'));
        return $pdf->stream(mt_rand(1, 10) . ' - ' . Carbon::now() . '_Senarai Projek.pdf');
    }

    public function blok() {

        $rowPerPage = 18;

        $blocks = Blok::orderby('name', 'asc')->get();
        $total = Blok::count();

        if($total % $rowPerPage == 0)
            $pages = $total / $rowPerPage;
        else
            $pages = (int)(($total / $rowPerPage) + 1);

        $pdf = PDF::loadView('admin.blok.pdf.index', compact('blocks', 'total', 'pages', 'rowPerPage'));
        return $pdf->stream(mt_rand(1, 10) . ' - ' . Carbon::now() . '_Senarai Blok.pdf');
    }


}
