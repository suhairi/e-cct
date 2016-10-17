<div class="col-xs-4">
    <div class="panel panel-info">
        <div class="panel-heading"><h4>Kemaskini Blok</h4></div>
        <div class="panel-body">

            {{ Form::model($blok, ['method' => 'post']) }}


            {{ Form::label('nama_blok', 'Nama Blok') }}
            {{ Form::text('name', $blok->name, ['class' => 'form-control', 'placeholder' => 'Nama Blok', 'required' => 'true']) }}

            {{ Form::label('kod_blok', 'Kod Blok') }}
            {{ Form::text('code', $blok->code, ['class' => 'form-control', 'placeholder' => 'Kod bagi Blok', 'required' => 'true']) }}

            <div align="right"> 
                <br />
                {{ Form::submit('Kemaskini Blok', ['class' => 'btn btn-primary']) }}
            </div>


            {{ Form::close() }}                   
        </div>
    </div>

</div>

