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

    public function postDaftar(Request $request) {

        $validation = Validator::make($request->all(), [
            'name'      => 'required',
            'email'     => 'required|email',
            'password'  => 'required',
            'level'     => 'required'
        ]);

        if($validation->fails()) {

            Session::flash('error', 'Sila isi semua ruangan dengan format yang betul!');
            return back();
        }

        $user = new User;

        $user->name     = strtoupper($request->name);
        $user->email    = strtolower($request->email);
        $user->password = bcrypt($request->password);
        $user->level    = $request->level;

        if($user->save()) {
            Session::flash('success', 'Berjaya. Pendaftaran Pengguna berjaya didaftarkan.');
        }

        $users = User::where('email', '!=', 'suhairi81@gmail.com')
            ->orderBy('level', 'asc')
            ->orderBy('name', 'asc')
            ->get();

        return view('admin.user.index', compact('users'));
    }

    public function deleteUser($id) {


        $user = User::where('email', '!=', 'suhairi81@gmail.com')->where('id', $id);

        if($user->delete()) {
            Session::flash('success', 'Berjaya. Pengguna berjaya dihapuskan.');
        } 
        
        return redirect()->back();
    }

    public function updateUser($id) {

        $user = User::where('id', $id)->first();

        $users = User::where('email', '!=', 'suhairi81@gmail.com')
            ->orderBy('level', 'asc')
            ->orderBy('name', 'asc')
            ->get();

        return view('admin.user.index', compact('users', 'user'));
    }

    public function postUpdateUser(Request $request) {

        $user = User::find($request->id);

        $user->name     = strtoupper($request->name);
        $user->email    = $request->email;
        $user->level    = $request->level;

        if($request->password != '')
            $user->password = bcrypt($request->password);

        if($user->save()) {
            Session::flash('success', 'Berjaya. Pengguna berjaya dikemaskini.');
        }

        return redirect('/admin/user/daftar');
    }

}