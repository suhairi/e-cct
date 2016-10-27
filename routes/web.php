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

Route::get('/register', function() {

    function __construct() {
        $this->middleware('auth');
        Session::flush();
    }

    return redirect('/home');
});

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

        // PDF
        Route::get('/pdf', [
            'as'    => 'admin.user.pdf',
            'uses'  => 'Admin\DownloadController@user'
        ]);



        // ###########################
        //            API
        // ###########################
            Route::get('/API/users', function() {
                $users =  App\User::all();
                return $users;
            });

            Route::post('/API/users', function() {

                $user           = new App\User;
                $user->name     = strtoupper(Request::get('name'));
                $user->email    = Request::get('email');
                $user->password = bcrypt(Request::get('password'));
                $user->level    = strtolower(Request::get('level'));
                $user->save();

                return $user;
            });

            Route::delete('/API/users/{id}', function($id) {
                return App\User::destroy($id);            

            });

            Route::get('/API/users/{id}', function($id) {
                return App\User::findOrFail($id);
            });

            Route::put('/API/users/{id}', function($id) {
                $user = App\User::where('id', $id)->first();

                $user->name = strtoupper(Request::get('name'));
                $user->email = strtolower(Request::get('email'));
                $user->level = strtolower(Request::get('level'));

                if(Request::get('password'))
                    $user->password = bcrypt(Request::get('password'));

                $user->save();

                return Response::json(Request::all());


            });

        // ###########################
        //        END OF API
        // ###########################


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

        // ###########################
        //            API
        // ###########################
            Route::get('/API/kaedah', function() {
                $kaedahs =  App\KaedahTanam::all();
                return $kaedahs;
            });

            Route::post('/API/kaedah', function() {
                $kaedah = new App\KaedahTanam;
                $kaedah->name = strtoupper(Request::get('name'));
                $kaedah->code = strtoupper(Request::get('code'));
                $kaedah->save();

                return $kaedah;
            });

            Route::delete('/API/kaedah/{id}', function($id) {
                return App\KaedahTanam::destroy($id);
            });

            Route::get('/API/kaedah/{id}', function($id) {
                return App\KaedahTanam::findOrFail($id);
            });

            Route::put('/API/kaedah/{id}', function($id) {

                $kaedah = App\KaedahTanam::where('id', $id)->first();

                $kaedah->name = strtoupper(Request::get('name'));
                $kaedah->code = strtoupper(Request::get('code'));
                $kaedah->save();

                return Response::json(Request::all());
            });


        // ###########################
        //        END OF API
        // ###########################

    });
    // END OF LOKALITI

    // VARIETI

    Route::group(['prefix' => 'varieti'], function() {

        Route::get('/daftar', [
            'as'    => 'admin.varieti.daftar',
            'uses'  => 'Admin\VarietiController@index'
        ]);

        Route::group(['prefix' => 'API'], function() {

            Route::get('index', function() {
                return App\Varieti::all();
            });

            Route::delete('/varieti/{id}', function($id) {

                $varieti = App\Varieti::destroy($id);

                return Response::json(Request::all());
            });

            Route::post('/new', function() {

                $varieti = new App\Varieti;

                $varieti->code  = strtoupper(Request::get('code'));
                $varieti->name  = strtoupper(Request::get('name'));
                $varieti->save();

                return Response::json(Request::all());
            });

            Route::put('/update/{id}', function($id) {
                $varieti = App\Varieti::findOrFail($id);

                $varieti->name = strtoupper(Request::get('name'));
                $varieti->code = strtoupper(Request::get('code'));
                $varieti->save();

                return Response::json(Request::all());
            });

            Route::get('/index/{id}', function($id) {
                return App\Varieti::where('id', $id)->first();
            });


        });

    });
    //END OF VARIETI


    // PROJEK

    Route::group(['prefix' => 'projek'], function() {

        Route::get('/daftar', [
            'as'    => 'admin.projek.daftar',
            'uses'  => 'Admin\ProjekController@index'
        ]);

        Route::post('/daftar', [
            'as'    => 'admin.projeck.daftar',
            'uses'  => 'Admin\ProjekController@daftar'
        ]);

        Route::get('/hapus/{id}', function($id) {
            App\Projek::destroy($id);
            return redirect()->route('admin.projek.daftar');
        });

        Route::get('/kemaskini/{id}', [
            'as'    => 'admin.projek.kemaksini',
            'uses'  => 'Admin\ProjekController@kemaskini'
        ]);

        Route::post('/update/{id}', [
            'as'    => 'admin.projek.update',
            'uses'  => 'Admin\ProjekController@update'
        ]);
    });
    // END PROJEK

    // BLOK

    Route::group(['prefix' => 'blok'], function() {

        Route::get('/daftar', [
            'as'    => 'admin.blok.daftar',
            'uses'  => 'Admin\BlokController@index'
        ]);

        Route::post('/daftar', [
            'as'    => 'admin.blok.daftar',
            'uses'  => 'Admin\BlokController@daftar'
        ]);

        Route::get('/hapus/{id}', function($id) {
            
            if(App\Blok::destroy($id))
                Session::flash('success', 'Berjaya. Blok telah dihapuskan.');
            else
                Session::flash('error', 'Gagal. Blok gagal dihapuskan.');

            return redirect()->route('admin.blok.daftar');
        });

        Route::get('/kemaskini/{id}', [
            'as'    => 'admin.blok.kemaskini',
            'uses'  => 'Admin\BlokController@kemaskini'
        ]);

        Route::post('/kemaskini/{id}', [
            'as'    => 'admin.blok.kemaskini',
            'uses'  => 'Admin\BlokController@update'
        ]);

    });
    // END OF BLOK

    

});


Route::group(['middleware' => 'auth', 'prefix' => 'user'], function() {

    Route::get('/rekod', [
        'as'    => 'user.rekod.index',
        'uses'  => 'User\RekodController@index'
    ]);



    Route::group(['prefix' => 'API'], function() {

        Route::get('/getLokaliti/{id}', function($id) {
            return App\Lokaliti::where('wilayah_id', $id)->get();
        });

        Route::get('/getProjek/{id}', function($id) {
            return App\Projek::where('lokaliti_id', $id)->get();
        });




    });



});
