<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Validator;

use App\Projek;
use App\Lokaliti;

use Session;

class ProjekController extends Controller
{
    public function index() {

        $projects = Projek::paginate(15);
        $localities = Lokaliti::pluck('code', 'id');

        $total = Projek::count();

        return view('admin.projek.index', compact('projects', 'localities', 'total'));
    }

    public function daftar(Request $request) {

        // return $request->all();

        $validation = Validator::make($request->all(), [
            'name'          => 'required',
            'lokaliti_id'   => 'required'
        ]);

        if($validation->fails()) {
            Session::flash('error', 'Gagal. Sila isi ruangan yang disediakan dengan betul.');
            return redirect()->back();
        }

        $found = Projek::where('name', $request->name)->first();

        if($found) {
            Session::flash('error', 'Gagal. Nama Projek ini telah wujud.');
            return redirect()->back();            
        }

        $projek = new Projek;
        $projek->name = $request->name;
        if($request->code != '')
            $projek->code = $request->code;

        $projek->lokaliti_id = $request->lokaliti_id;
        
        if($projek->save())
            Session::flash('success', 'Berjaya. Projek telah didaftarkan.');

        return redirect()->route('admin.projek.daftar');
    }

    public function kemaskini($id) {
        
        $project = Projek::findOrFail($id);
        $projects = Projek::all();
        $localities = Lokaliti::pluck('code', 'id');

        return view('admin.projek.index', compact('projects', 'localities', 'project'));
    }

    public function update(Request $request, $id) {

        $validation = Validator::make($request->all(), [
            'name'          => 'required',
            'lokaliti_id'   => 'required'
        ]);

        if($validation->fails()) {
            Session::flash('error', 'Gagal. Sila isi ruangan yang disediakan dengan betul.');
            return redirect()->back();
        }

        $projek = Projek::findOrFail($id);
        $projek->name = $request->name;
        if($request->code != '')
            $projek->code = $request->code;

        $projek->lokaliti_id = $request->lokaliti_id;
        if($projek->save())
            Session::flash('success', 'Berjaya. Projek telah dikemaskini.');


        return redirect()->route('admin.projek.daftar');

    }


}
