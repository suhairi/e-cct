@extends('layouts.pdf')


@section('content')

<div class="container">
    <div class="row">

        <div class="col-xs-8">
            <div class="panel panel-info">
                <div class="panel-heading"><h4>Senarai Blok </h4></div>
                <div class="panel-body">

                    <table class="table">
                        <tr>
                            <td><strong>Bil </strong></td>
                            <td><strong>Nama </strong></td>
                            <td><strong>Kod</strong></td>
                            <td><strong>Lokaliti</strong></td>
                        </tr>
                        @foreach($blocks as $block)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $block->name }}</td>
                                <td>{{ $block->code }}</td>
                                <td align="center">{{ $block->lokaliti->code }}</td>
                            </tr>
                            @if(($loop->index + 1) % 18 == 0)
                                </table>
                                <div class="page-break"></div>
                                <br /><br />
                                <table class="table">
                                    <tr>
                                        <td><strong>Bil </strong></td>
                                        <td><strong>Nama </strong></td>
                                        <td><strong>Kod </strong></td>
                                        <td><strong>Lokaliti</strong></td>
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