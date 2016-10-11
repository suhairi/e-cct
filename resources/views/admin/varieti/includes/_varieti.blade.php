<div class="col-xs-4">
    <div class="panel panel-info">
        <div class="panel-heading"><h4>Daftar Varieti</h4></div>
        <div class="panel-body">

            {{ Form::open(['url' => '#', 'method' => 'post', '@submit.prevent' => 'addData']) }}

            {{ Form::label('Nama Varieti')}}
            {{ Form::text('name', '', ['class' => 'form-control', 'v-model' => 'newVarieti.name', 'placeholder' => 'Nama Varieti']) }}

            {{ Form::label('Kod')}}
            {{ Form::text('code', '', ['class' => 'form-control', 'v-model' => 'newVarieti.code', 'placeholder' => 'Contoh: MR 219']) }}

            <div align="right"> 
                <br />
                {{ Form::submit('Daftar Varieti', ['class' => 'btn btn-primary', 'v-if' => '!edit', ':disabled' => '!isValid']) }}
                {{ Form::button('Kemaskini Varieti', ['class' => 'btn btn-primary', 'v-if' => 'edit', '@click' => 'editData(newVarieti.id)', ':disabled' => '!isValid']) }}
                {{ Form::button('Batal', ['class' => 'btn btn-default', 'v-if' => 'edit', '@click' => 'batal']) }}
            </div>

            {{ Form::close() }}                   
        </div>
    </div>

</div>