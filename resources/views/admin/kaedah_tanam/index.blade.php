@extends('layouts.app')

@section('content')


<div id="kaedah_tanam">

<div class="container">
    <h3>Kaedah Tanam</h3>

    @include('admin.kaedah_tanam.includes._daftarKaedah')      
    


    <div class="col-xs-7">
            <div class="panel panel-info">
                <div class="panel-heading"><h4>Senarai Kaedah Penanaman</h4></div>
                <div class="panel-body">
                <div id="kaedah_tanam">

                    <table class="table">
                        <tr>
                            <td><strong>Nama</strong></td>
                            <td><strong>Kod</strong></td>                            
                            <td><strong>Pilihan</strong></td>
                        </tr>
                        <tr v-for="kaedah in kaedahs">
                            <td>@{{ kaedah.name }}</td>
                            <td>@{{ kaedah.code }}</td>
                            <td>
                                <button class="btn btn-default" @click="updateData(kaedah)">KEMASKINI</button>
                                <button class="btn btn-danger" @click="deleteData(kaedah.id)">HAPUS</button>
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