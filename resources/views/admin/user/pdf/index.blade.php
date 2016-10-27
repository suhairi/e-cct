@extends('layouts.pdf')


@section('content')

<div class="container">
    <div class="row">

        <div class="col-xs-12">
            <div class="panel panel-info">
                <div class="panel-heading"><h4>Senarai Pengguna </h4></div>
                <div class="panel-body">

                    <table class="table">
                        <tr>
                            <td><strong>Nama </strong></td>
                            <td><strong>Email</strong></td>                            
                            <td><strong>Level</strong></td>
                        </tr>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->level }}</td>
                        </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>

    </div>
</div>

</div>


@endsection