@extends('layouts.pdf')


@section('content')

<div class="container">

    <div class="row">

        <h3>Sistem e-CCT</h3>

        <div class="col-xs-8">
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
                            @if($loop->index / 15 == 0)
                                <div class="page-break"></div>
                            @endif

                        @endforeach
                    </table>

                </div>
            </div>

        </div>

    </div>

</div>
@endsection