@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">

        @if(Route::currentRouteName() == 'admin.blok.kemaskini')
            @include('admin.blok.includes._kemaskini')
        @endif

        @if(Route::currentRouteName() == 'admin.blok.daftar')
            @include('admin.blok.includes._daftar')
        @endif


        <div class="col-xs-8">
            <div align="right"><p><span class="glyphicon glyphicon-download-alt"> <a href="{{ route('admin.blok.pdf') }}">PDF</a> </span></p> </div>
            <div class="panel panel-info">
                <div class="panel-heading"><h4>Senarai Blok <small>({{ $total }} Blok)</small></h4></div>
                <div class="panel-body">

                    <table class="table">
                        <tr>
                            <td><strong>Bil </strong></td>
                            <td><strong>Nama </strong></td>
                            <td><strong>Kod</strong></td>
                            <td><strong>Lokaliti</strong></td>
                            <td align="center"><strong>Pilihan</strong></td>
                        </tr>
                        @foreach($blocks as $block)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $block->name }}</td>
                                <td>{{ $block->code }}</td>
                                <td align="center">{{ $block->lokaliti->code }}</td>
                                <td align="right">
                                    <a href="{{ url('admin/blok/kemaskini/' . $block->id) }}"><button class="btn btn-default">KEMASKINI</button></a>
                                    <a href="{{ url('admin/blok/hapus/' . $block->id) }}"><button class="btn btn-danger">HAPUS</button></a>
                                </td>
                            </tr>
                        @endforeach
                    </table>

                    <div align="center">{{ $blocks->links() }}</div>

                </div>
            </div>

        </div>

    </div>
</div>

@endsection