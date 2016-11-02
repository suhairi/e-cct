@extends('layouts.pdf')

@section('content')

<div class="container">
    <h3>Kaedah Tanam</h3>

    <div class="col-xs-10">
        
            <div class="panel panel-info">
                <div class="panel-heading"><h4>Senarai Kaedah Penanaman</h4></div>
                <div class="panel-body">
                    <div id="kaedah_tanam">

                        <table class="table">
                            <tr>
                                <td><strong>Bil</strong></td>
                                <td><strong>Nama</strong></td>
                                <td><strong>Kod</strong></td>
                            </tr>
                            @foreach($kaedahs as $kaedah)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $kaedah->name }}</td>
                                    <td>{{ $kaedah->code }}</td>
                                </tr>
                                @if(($loop->index + 1) % $rowPerPage == 0)
                                    </table>
                                    <div class="page-break"></div>
                                    <br /><br />

                                    <table class="table">                                    
                                        <tr>
                                            <td><strong>Bil</strong></td>
                                            <td><strong>Nama</strong></td>
                                            <td><strong>Kod</strong></td>
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