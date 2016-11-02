@extends('layouts.pdf')


@section('content')

<div class="container">

    <div class="row">

        <h3>Sistem e-CCT</h3>

        <div class="col-xs-10">
            <div class="panel panel-info">
                <div class="panel-heading"><h4>Senarai Varieti </h4></div>
                <div class="panel-body">

                    <table class="table">
                        <tr>
                            <td><strong>Bil</strong></td>
                            <td><strong>Nama</strong></td>
                            <td><strong>Kod</strong></td>                            
                        </tr>
                        @foreach($varieties as $variety)
                            <tr v-for="variety in varieties">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $variety->name }}</td>
                                <td>{{ $variety->code }}</td>
                            </tr>
                            @if(($loop->index + 1) % 18 == 0)
                                </table>
                                <div class="page-break"></div>
                                <br /><br />
                                <table class="table">
                                    <tr>
                                        <td><strong>Bil</strong></td>
                                        <td><strong>Nama</strong></td>
                                        <td><strong>Kod</strong></td>
                                        <td><strong>Pilihan</strong></td>
                                    </tr>
                            @endif
                        @endforeach
                    </table>


                </div>
            </div>

        </div>

    </div>

</div>


</div>
@endsection