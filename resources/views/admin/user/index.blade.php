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


        <div class="col-xs-8">
            <div class="panel panel-info">
                <div class="panel-heading"><h4>Senarai Pengguna</h4></div>
                <div class="panel-body">

                    <div id="carian_users">

                    <!-- {{ Form::text('name', '', ['class' => 'form-control', 'v-model' => 'fa_users']) }} -->

                    <table class="table">
                        <tr>
                            <td><strong>Nama</strong></td>
                            <td><strong>Email</strong></td>                            
                            <td><strong>Level</strong></td>
                            <td><strong>Pilihan</strong></td>
                        </tr>
                        <tr v-for="fa_user in fa_users">
                            <td>@{{ fa_user.name }}</td>
                            <td>@{{ fa_user.email }}</td>
                            <td>@{{ fa_user.level }}</td>
                            <td>
                                <button class="btn btn-success" @click="updateUser(fa_user)">KEMASKINI</button>
                                <button class="btn btn-danger" @click="deleteUser(fa_user)">HAPUS</button>
                            </td>
                        </tr>
                    </table>

                    </div>

                </div>
            </div>

        </div>

    </div>

</div>


@endsection