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
            <div class="panel panel-info">
                <div class="panel-heading"><div align="left"><h4>Senarai Blok</h4></div><div align="right">PDF</div></div>
                <div class="panel-body">

                    <table class="table">
                        <tr>
                            <td><strong>Nama </strong></td>
                            <td><strong>Kod</strong></td>
                            <td><strong>Pilihan</strong></td>
                        </tr>
                        @foreach($blocks as $block)
                            <tr>
                                <td>{{ $block->name }}</td>
                                <td>{{ $block->code }}</td>
                                <td>
                                    <a href="{{ url('admin/blok/kemaskini/' . $block->id) }}"><button class="btn btn-default">KEMASKINI</button></a>
                                    <a href="{{ url('admin/blok/hapus/' . $block->id) }}"><button class="btn btn-danger">HAPUS</button></a>
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