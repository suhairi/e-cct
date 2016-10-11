<div class="col-xs-4">
    <div class="panel panel-info">
        <div class="panel-heading"><h4>Daftar Pengguna</h4></div>
        <div class="panel-body">

        ID : @{{ newUser.id }}
            {{ Form::open(['url' => '#', '@submit.prevent' => 'addUser']) }}


            {{ Form::label('Nama Penuh Pengguna')}}
            {{ Form::text('name', '', ['class' => 'form-control', 'v-model' => 'newUser.name', 'placeholder' => 'Nama Penuh', 'required' => 'true']) }}

            {{ Form::label('Emel (Kata Nama)')}}
            {{ Form::email('email', '', ['class' => 'form-control', 'v-model' => 'newUser.email', 'placeholder' => 'Emel', 'required' => 'true']) }}

            {{ Form::label('Kata Laluan')}}
            {{ Form::password('password', ['class' => 'form-control', 'v-model' => 'newUser.password', 'placeholder' => 'Kata Laluan', 'required' => 'true']) }}

            {{ Form::label('Level Pengguna')}}
            {{ Form::select('level', ['' => 'Level', 'admin' => 'ADMIN', 'user' => 'PEMBANCI'], 'Level', ['class' => 'form-control', 'v-model' => 'newUser.level', 'required' => 'true']) }}

            <div align="right"> 
                <br />
                {{ Form::submit('Daftar Pengguna', ['class' => 'btn btn-primary', 'v-if' => '!edit'])}}
                {{ Form::button('Kemaskini Pengguna', ['class' => 'btn btn-primary', 'v-if' => 'edit', '@click' => 'editUser(newUser.id)'])}}
            </div>


            {{ Form::close() }}                   
        </div>
    </div>

</div>

