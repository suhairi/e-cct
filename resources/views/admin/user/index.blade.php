@extends('layouts.app')


@section('content')

<div id="kaedah_tanam"></div>
<div id="carian_users">

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
                <div class="panel-heading"><div align="left"><h4>Senarai Pengguna</h4></div><div align="right">PDF</div></div>
                <div class="panel-body">

                    <table class="table">
                        <tr>
                            <td><strong>Nama </strong></td>
                            <td><strong>Email</strong></td>                            
                            <td><strong>Level</strong></td>
                            <td><strong>Pilihan</strong></td>
                        </tr>
                        <tr v-for="my_user in my_users">
                            <td>@{{ my_user.name }}</td>
                            <td>@{{ my_user.email }}</td>
                            <td>@{{ my_user.level }}</td>
                            <td>
                                <button class="btn btn-default" @click="updateUser(my_user)">KEMASKINI</button>
                                <button class="btn btn-danger" @click="deleteUser(my_user)">HAPUS</button>
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