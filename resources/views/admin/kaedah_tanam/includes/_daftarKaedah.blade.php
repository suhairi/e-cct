<div class="col-xs-4">
    <div class="panel panel-info">
        <div class="panel-heading"><h4>Daftar Kaedah Tanam</h4></div>
        <div class="panel-body">

            {{ Form::open(['url' => '#', 'method' => 'post', '@submit.prevent' => 'addData']) }}

            {{ Form::label('Nama Kaedah')}}
            {{ Form::text('name', '', ['class' => 'form-control', 'v-model' => 'newKaedah.name', 'placeholder' => 'Nama Kaedah']) }}

            {{ Form::label('Kod')}}
            {{ Form::text('code', '', ['class' => 'form-control', 'v-model' => 'newKaedah.code', 'placeholder' => 'Contoh: TTB']) }}

            <div align="right"> 
                <br />
                {{ Form::submit('Daftar Kaedah', ['class' => 'btn btn-primary', 'v-if' => '!edit', ':disabled' => '!isValid']) }}
                {{ Form::button('Kemaskini Kaedah', ['class' => 'btn btn-primary', 'v-if' => 'edit', '@click' => 'editData(newKaedah.id)', ':disabled' => '!isValid']) }}
                {{ Form::button('Batal', ['class' => 'btn btn-default', 'v-if' => 'edit', '@click' => 'batal']) }}
            </div>

            {{ Form::close() }}                   
        </div>
    </div>

</div>
