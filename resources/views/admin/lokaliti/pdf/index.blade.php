@extends('layouts.pdf')


@section('content')

<div class="container">
    <div class="row">

        <h3>Sistem e-CCT</h3>

        <div class="col-xs-12">
            <div class="panel panel-info">
                <div class="panel-heading"><h4>Senarai Lokaliti </h4></div>
                <div class="panel-body">

                    <table class="table">
                        <tr>
                            <td><strong>Bil </strong></td>
                            <td><strong>Nama</strong></td>
                            <td><strong>Kod</strong></td>                            
                            <td><strong>Wilayah</strong></td>
                        </tr>
                        @foreach($localities as $lokaliti)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ strtoupper($lokaliti->name) }}</td>
                                <td>{{ $lokaliti->code }}</td>
                                <td>{{ $lokaliti->wilayah->name }}</td>
                            </tr>
                            @if(($loop->index + 1) % 18 == 0)
                                </table>
                                <div class="page-break"></div>
                                <br /><br />
                                <table class="table">
                                    <tr>
                                        <td><strong>Bil </strong></td>
                                        <td><strong>Nama</strong></td>
                                        <td><strong>Kod</strong></td>
                                        <td><strong>Wilayah</strong></td>
                                    </tr>
                            @endif

                        @endforeach
                    </table>

                </div>
            </div>

        </div>

    </div>

</div>
@endsection