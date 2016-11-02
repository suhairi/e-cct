@extends('layouts.app')


@section('content')

<div class="container">

    <div class="row">

        <h3>Lokaliti</h3>

        @include('admin.kaedah_tanam.includes._daftarKaedah')


        <div class="col-xs-8">
            <div align="right"><p><span class="glyphicon glyphicon-download-alt"> <a href="{{ route('admin.lokaliti.pdf') }}">PDF</a> </span></p> </div>
            <div class="panel panel-info">
                <div class="panel-heading"><h4>Senarai Lokaliti <small>({{ $total }} Lokaliti)</small></h4></div>
                <div class="panel-body">

                    <table class="table">
                        <tr>
                            <td><strong>Nama</strong></td>
                            <td><strong>Kod</strong></td>                            
                            <td><strong>Wilayah</strong></td>
                        </tr>
                        @foreach($localities as $lokaliti)
                            <tr>
                                <td>{{ strtoupper($lokaliti->name) }}</td>
                                <td>{{ $lokaliti->code }}</td>
                                <td>{{ $lokaliti->wilayah->name }}</td>
                            </tr>
                        @endforeach
                    </table>

                    <div align="center">{{ $localities->links() }}</div>

                </div>
            </div>

        </div>

    </div>

</div>
@endsection