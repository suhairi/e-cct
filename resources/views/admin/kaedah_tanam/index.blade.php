@extends('layouts.app')

@section('content')

<div class="container">
    <h3>Kaedah Tanam</h3>

    @if(Route::currentRouteName() == 'admin.kaedah_tanam.daftar')
        @include('admin.kaedah_tanam.includes._daftarKaedah')
    @endif


    <div class="col-xs-7">
            <div class="panel panel-info">
                <div class="panel-heading"><h4>Senarai Pengguna</h4></div>
                <div class="panel-body">

                    <table class="table">
                        <tr>
                            <td><strong>Nama</strong></td>
                            <td><strong>Kod</strong></td>                            
                            <td><strong>Pilihan</strong></td>
                        </tr>
                        @foreach($kaedahs as $kaedah)
                            <tr>
                                <td>{{ $kaedah->name }}</td>
                                <td>{{ $kaedah->code }}</td>
                                <td>
                                    [ <a href="{{ url('/admin/kaedah_tanam/update/' . $kaedah->id) }}">Kemaskini</a> ] 
                                    [ <a href="{{ url('/admin/kaedah_tanam/delete/' . $kaedah->id) }}">Delete </a> ]
                                </td>
                            </tr>

                        @endforeach
                    </table>

                </div>
            </div>

        </div>
</div>

@endsection