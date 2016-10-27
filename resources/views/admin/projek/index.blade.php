@extends('layouts.app')


@section('content')

<div class="container">

    <div class="row">

        <h3>Projek</h3>
        <hr />

        @if(empty($project))
            @include('admin.projek.includes._projek')
        @else
            @include('admin.projek.includes._kemaskini')
        @endif

        


        <div class="col-xs-7">
            <div class="panel panel-info">
                <div class="panel-heading"><h4>Senarai Projek <small>({{ $total }} Projek)</small></h4></div>
                <div class="panel-body">

                    <table class="table">
                        <tr>
                            <td><strong>Nama Projek</strong></td>
                            <td><strong>Kod</strong></td>                            
                            <td><strong>Lokaliti</strong></td>                            
                            <td><strong>Pilihan</strong></td>                            
                        </tr>
                        @foreach($projects as $project)
                            <tr>
                                <td>{{ $project->name }}</td>
                                <td>{{ $project->code }}</td>
                                <td>{{ $project->lokaliti->code }}</td>
                                <td>
                                    <a href="{{ url('/admin/projek/kemaskini/' . $project->id) }}"><button class="btn btn-default">KEMASKINI</button></a>
                                    <a href="{{ url('/admin/projek/hapus/' . $project->id) }}"><button class="btn btn-danger">HAPUS</button></a>
                                </td>
                            </tr>

                        @endforeach
                    </table>

                    <div align="center">{{ $projects->links() }}</div>


                </div>
            </div>

        </div>

    </div>

</div>

@endsection