<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Validator;

use Session;


use App\KaedahTanam;

class KaedahTanamController extends Controller
{
    public function daftar() {

        $kaedahs = KaedahTanam::orderBy('name', 'asc')->get();


        return view('admin.kaedah_tanam.index', compact('kaedahs'));
    }

    // public function postDaftar(Request $request) {

    //     $validation = Validator::make($request->all(), [
    //         'name'  => 'required',
    //         'code'  => 'required'
    //     ]);

    //     if($validation->fails()) {

    //         Session::flash('error', 'Gagal. Kaedah Tanam gagal didaftarkan.');
    //         return redirect()->back();
    //     }

    //     $kaedah = new KaedahTanam;
    //     $kaedah->name = $request->name;
    //     $kaedah->code = $request->code;

    //     if($kaedah->save())
    //         Session::flash('success', 'Berjaya. Kaedah Tanam berjaya didaftarkan.');

    //     return redirect()->back();
    // }

    // public function deleteKaedah($id) {

    //     $kaedah = KaedahTanam::find($id);

    //     if($kaedah->delete()) {
    //         Session::flash('success', 'Berjaya. Kaedah Tanam ' . $kaedah->name  . ' berjaya dihapus.');
    //     }

    //     return redirect()->back();
    // }
} 
