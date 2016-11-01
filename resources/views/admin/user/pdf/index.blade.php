@extends('layouts.pdf')


@section('content')

<div class="container">
    <div class="row">

        <h3>Sistem e-CCT</h3>

        <div class="col-xs-12">
            <div class="panel panel-info">
                <div class="panel-heading"><h4>Senarai Pengguna </h4></div>
                <div class="panel-body">

                    <table class="table">
                        <tr>
                            <td>Bil</td>
                            <td><strong>Nama </strong></td>
                            <td><strong>Email</strong></td>                            
                            <td><strong>Level</strong></td>
                        </tr>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->level }}</td>
                        </tr>
                        @if((($loop->index + 1) % 10) == 0)
                            <div class="page-break"></div>
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