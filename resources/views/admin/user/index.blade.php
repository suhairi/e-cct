@extends('layouts.app')


@section('content')

<div class="container">

    <div class="row">


        @if(Route::currentRouteName() == 'admin.user.update')
            @include('admin.user.includes._kemaskiniUser')
        @endif

        @if(Route::currentRouteName() == 'admin.user.daftar')
            @include('admin.user.includes._daftarUser')
        @endif



        <div class="col-xs-7">
            <div class="panel panel-info">
                <div class="panel-heading"><h4>Senarai Pengguna</h4></div>
                <div class="panel-body">

                    <table class="table">
                        <tr>
                            <td><strong>Nama</strong></td>
                            <td><strong>Email</strong></td>                            
                            <td><strong>Level</strong></td>
                            <td><strong>Pilihan</strong></td>
                        </tr>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->level }}</td>
                                <td>
                                    [ <a href="{{ url('/admin/user/update/' . $user->id) }}">Kemaskini</a> ] 
                                    [ <a href="{{ url('/admin/user/delete/' . $user->id) }}">Delete </a> ]
                                </td>
                            </tr>

                        @endforeach
                    </table>

                </div>
            </div>

        </div>

    </div>

</div>
@endsection