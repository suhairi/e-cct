<div class="col-xs-4">
    <div class="panel panel-info">
        <div class="panel-heading"><h4>Daftar Pengguna</h4></div>
        <div class="panel-body">
            {{ Form::open() }}

            {{ Form::label('Nama Penuh Pengguna')}}
            {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Nama Penuh']) }}

            {{ Form::label('Emel (Kata Nama)')}}
            {{ Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'Emel']) }}

            {{ Form::label('Kata Laluan')}}
            {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Kata Laluan']) }}

            {{ Form::label('Level Pengguna')}}
            {{ Form::select('level', ['' => 'Level', 'admin' => 'ADMIN', 'user' => 'PEMBANCI'], 'Level', ['class' => 'form-control']) }}

            <div align="right"> 
                <br />
                {{ Form::submit('Daftar Pengguna', ['class' => 'btn btn-primary'])}}
            </div>


            {{ Form::close() }}                   
        </div>
    </div>

</div>

