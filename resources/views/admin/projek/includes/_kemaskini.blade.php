<div class="col-xs-4">
    <div class="panel panel-info">
        <div class="panel-heading"><h4>Kemaskini Projek</h4></div>
        <div class="panel-body">

            {{ Form::model($project, ['route' => ['admin.projek.update', $project->id]]) }}

            {{ Form::label('nama_projek', '*Nama Projek')}}
            {{ Form::text('name', $project->name, ['class' => 'form-control', 'placeholder' => 'Nama Projek', 'required' => 'true']) }}

            {{ Form::label('lokaliti', '*Lokaliti')}}
            {{ Form::select('lokaliti_id', $localities, $project->lokaliti_id, ['class' => 'form-control', 'placeholder' => 'Lokaliti', 'required' => 'true']) }}

            {{ Form::label('Kod')}}
            {{ Form::text('code', $project->code, ['class' => 'form-control', 'placeholder' => 'Contoh: A1 - 0001', ]) }}

            <div align="right"> 
                <br />
                {{ Form::submit('Kemaskini Projek', ['class' => 'btn btn-primary']) }}
            </div>

            {{ Form::close() }}                   
        </div>
    </div>

</div>