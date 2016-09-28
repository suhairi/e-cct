<div class="col-xs-4">
    <div class="panel panel-info">
        <div class="panel-heading"><h4>Daftar Kaedah Tanam</h4></div>
        <div class="panel-body">
            {{ Form::open() }}

            {{ Form::label('Nama Kaedah')}}
            {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Nama Kaedah']) }}

            {{ Form::label('Kod')}}
            {{ Form::text('code', '', ['class' => 'form-control', 'placeholder' => 'Contoh: TTB']) }}

            <div align="right"> 
                <br />
                {{ Form::submit('Daftar Kaedah', ['class' => 'btn btn-primary'])}}
            </div>


            {{ Form::close() }}                   
        </div>
    </div>

</div>
