@extends('layouts.app')


@section('content')

<div id="el_varieti">

<div class="container">

    <div class="row">

        <h3>Varieti</h3>

        <!-- EDIT : @{{ edit }} -->

        @include('admin.varieti.includes._varieti')


        <div class="col-xs-8">
            <div align="right"><p><span class="glyphicon glyphicon-download-alt"> <a href="{{ route('admin.varieti.pdf') }}">PDF</a> </span></p> </div>
            <div class="panel panel-info">
                <div class="panel-heading"><h4>Senarai Varieti <small>({{ $total }} Varieti)</small></h4></div>
                <div class="panel-body">

                    <table class="table">
                        <tr>
                            <td><strong>Nama</strong></td>
                            <td><strong>Kod</strong></td>                            
                            <td><strong>Pilihan</strong></td>                            
                        </tr>
                        <tr v-for="variety in varieties">
                            <td>@{{ variety.name }}</td>
                            <td>@{{ variety.code }}</td>
                            <td>
                                <button class="btn btn-default" @click="updateData(variety)">KEMASKINI</button>
                                <button class="btn btn-danger" @click="deleteData(variety.id)">HAPUS</button>
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