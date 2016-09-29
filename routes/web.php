<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
	if(Auth::guest()) {
        return view('auth.login');
    } else {

        if(Auth::user()->level == 'admin')
            return view('admin.index');
        else
            return view('user.index');
    }


	
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function() {

    // MENUS

    // USERS
    Route::group(['prefix' => 'user'], function() {

        // DAFTAR
        Route::get('/daftar', [
            'as'    => 'admin.user.daftar',
            'uses'  => 'Admin\DaftarController@daftar'
        ]);

        Route::post('/daftar', [
            'as'    => 'admin.user.daftar',
            'uses'  => 'Admin\DaftarController@postDaftar'
        ]);

        // DELETE
        Route::get('/delete/{id}', [
            'as'    => 'admin.user.delete',
            'uses'  => 'Admin\DaftarController@deleteUser'
        ]);

        // KEMASKINI
        Route::get('/update/{id}', [
            'as'    => 'admin.user.update',
            'uses'  => 'Admin\DaftarController@updateUser'
        ]);

        Route::post('/update', [
            'as'    => 'admin.user.postUpdate',
            'uses'  => 'Admin\DaftarController@postUpdateUser'
        ]);

        // ###########################
        //            API
        // ###########################
        Route::get('/API/users', function() {
            return App\User::latest()->get();
        });


    });

    // LOKALITI
    Route::group(['prefix' => 'lokaliti'], function() {

        Route::get('/daftar', [
            'as'    => 'admin.lokaliti.daftar',
            'uses'  => 'Admin\LokalitiController@daftar'
        ]);
    });

    // KAEDAH TANAM
    Route::group(['prefix' => 'kaedah_tanam'], function() {

        Route::get('/daftar', [
            'as'    => 'admin.kaedah_tanam.daftar',
            'uses'  => 'Admin\KaedahTanamController@daftar'
        ]);

        // POST DAFTAR
        Route::post('/daftar', [
            'as'    => 'admin.kaedah_tanam.daftar',
            'uses'  => 'Admin\KaedahTanamController@postDaftar'
        ]);



        // DELETE
        Route::get('/delete/{id}', [
            'as'    => 'admin.kaedah_tanam.delete',
            'uses'  => 'Admin\KaedahTanamController@deleteKaedah'
        ]);

        // KEMASKINI
        Route::get('/update/{id}', [
            'as'    => 'admin.kaedah_tanam.update',
            'uses'  => 'Admin\KaedahTanamController@updateKaedah'
        ]);

        Route::post('/update', [
            'as'    => 'admin.kaedah_tanam.postUpdate',
            'uses'  => 'Admin\KaedahTanamController@postUpdateKaedah'
        ]);

    });



});
