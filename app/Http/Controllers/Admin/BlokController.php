<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Validator;
use Session;

use App\Blok;
use App\Lokaliti;

class BlokController extends Controller
{
    public function index() {

        $blocks = Blok::paginate(15);
        $localities = Lokaliti::pluck('code', 'id');
        $total = Blok::count();

        return view('admin.blok.index', compact('blocks', 'total', 'localities'));
    }

    public function daftar(Request $request) {

        // Validation

        $validation = Validator::make($request->all(), [
            'name'  => 'required',
            'code'  => 'required'
        ]);


        if($validation->fails()){
            Session::flash('error', 'Gagal. Sila isi ruangan yang disediakan dengan betul.');
            return redirect()->back();
        }

        // check redundunt of blok code
        $found = Blok::where('code', $request->get('blok'))->get();

        if(!$found) {
            Session::flash('error', 'Gagal. Kod Blok telah wujud.');
            return redirect()->back();
        }

        // Save into database

        $blok = new Blok;
        $blok->name = strtoupper($request->get('name'));
        $blok->code = strtoupper($request->get('code'));

        if($blok->save())
            Session::flash('success', 'Berjaya. Blok telah didaftarkan.');


        return redirect()->route('admin.blok.daftar');

    }

    public function kemaskini($id) {
        $blocks = Blok::all();
        $blok = Blok::where('id', $id)->first();

        return view('admin.blok.index', compact('blok', 'blocks'));
    }

    public function update(Request $request, $id) {
        $blok = Blok::where('id', $id)->first();

        $blok->name = strtoupper($request->get('name'));
        $blok->code = strtoupper($request->get('code'));

        if($blok->save())
            Session::flash('success', 'Berjaya. Blok telah dikemaskini.');
        else
            Session::flash('error', 'Gagal. Blok gagal dikemaskini.');

        return redirect()->route('admin.blok.daftar');
    }


}
