<div class="col-xs-4">
    <div class="panel panel-info">
        <div class="panel-heading"><h4>Daftar Blok</h4></div>
        <div class="panel-body">

            {{ Form::open() }}


            {{ Form::label('nama_blok', 'Nama Blok') }}
            {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Nama Blok', 'required' => 'true']) }}

            {{ Form::label('kod_blok', 'Kod Blok') }}
            {{ Form::text('code', '', ['class' => 'form-control', 'placeholder' => 'Kod bagi Blok', 'required' => 'true']) }}

            {{ Form::label('lokaliti', '*Lokaliti')}}
            {{ Form::select('lokaliti_id', $localities, '', ['class' => 'form-control', 'placeholder' => 'Lokaliti', 'required' => 'true']) }}

            <div align="right"> 
                <br />
                {{ Form::submit('Daftar Blok', ['class' => 'btn btn-primary']) }}
            </div>


            {{ Form::close() }}                   
        </div>
    </div>

</div>

