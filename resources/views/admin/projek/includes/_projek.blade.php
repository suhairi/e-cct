<div class="col-xs-4">
    <div class="panel panel-info">
        <div class="panel-heading"><h4>Daftar Projek</h4></div>
        <div class="panel-body">

            {{ Form::open() }}

            {{ Form::label('nama_projek', '*Nama Projek')}}
            {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Nama Projek', 'required' => 'true']) }}

            {{ Form::label('lokaliti', '*Lokaliti')}}
            {{ Form::select('lokaliti_id', $localities, '', ['class' => 'form-control', 'placeholder' => 'Lokaliti', 'required' => 'true']) }}

            {{ Form::label('Kod')}}
            {{ Form::text('code', '', ['class' => 'form-control', 'placeholder' => 'Contoh: A1 - 0001', ]) }}

            <div align="right"> 
                <br />
                {{ Form::submit('Daftar Projek', ['class' => 'btn btn-primary']) }}
            </div>

            {{ Form::close() }}                   
        </div>
    </div>

</div>