@extends('layouts.app2')

@section('content')

<div class="container">

    {{ Form::open() }}

    <div class="row">
        <div class="col col-xs-4">
            <div class="panel panel-primary">
                <div class="panel-heading"><h4>ANALISA KOMPONEN HASIL PADI CCT</h4></div>
                <div class="panel-body">

                    <table class="table table-condensed">
                        <tr>
                            <td><strong>Jenis Projek</strong></td>
                            <td>:</td>
                            <td>{{ Form::select('project_type', ['MADA', 'NKEA'], '', ['class' => 'form-control', 'placeholder' => 'Jenis Projek']) }}</td>
                        </tr>
                        <tr>
                            <td><strong>Wilayah</strong></td>
                            <td>:</td>
                            <td>{{ Form::select('wilayah', $wilayah, '', ['class' => 'form-control', 'placeholder' => 'Wilayah', 'id' => 'wilayah']) }}</td>
                        </tr>
                        <tr>
                            <td><strong>Lokaliti</strong></td>
                            <td>:</td>
                            <td><div id="data_lokaliti"></div></td>
                        </tr>
                        <tr>
                            <td><strong>Projek</strong></td>
                            <td>:</td>
                            <td>{{ Form::select('projek', $projects, '', ['class' => 'form-control', 'placeholder' => 'Nama Projek']) }}</td>
                        </tr>
                        <tr>
                            <td><strong>No Blok</strong></td>
                            <td>:</td>
                            <td>{{ Form::select('blok_id', ['MADA', 'NKEA'], '', ['class' => 'form-control', 'placeholder' => 'No Blok']) }}</td>
                        </tr>
                        <tr>
                            <td><strong>Kaedah Tanam</strong></td>
                            <td>:</td>
                            <td>{{ Form::select('wilayah', $kaedah, '', ['class' => 'form-control', 'placeholder' => 'Kaedah Tanam']) }}</td>
                        </tr>
                        <tr>
                            <td><strong>No Lot</strong></td>
                            <td>:</td>
                            <td>{{ Form::text('lot_no', '', ['class' => 'form-control', 'placeholder' => 'No Lot']) }}</td>
                        </tr>
                        <tr>
                            <td><strong>Fasa</strong></td>
                            <td>:</td>
                            <td>{{ Form::text('fasa', '', ['class' => 'form-control', 'placeholder' => 'Fasa']) }}</td>
                        </tr>



                    </table>



                </div>
            </div>
        </div>
        <div class="col col-xs-6">
            <div class="panel panel-primary">
                <div class="panel-heading"><h4>ITEM KOMPONEN HASIL PADI</h4></div>
                <div class="panel-body">
                    <p>here</p>
                </div>
            </div>
        </div>

        
    </div>

    <div class="row">
        <div class="col col-xs-12">
            <div class="panel panel-primary">
                <div class="panel-heading"><h4>ANALISA FAKTOR PENYEBAB</h4></div>
                <div class="panel-body">
                    <p>here</p>
                </div>
            </div>
        </div>
        
    </div>

    {{ Form::close() }}
</div>

@endsection

@section('js')

    <script src="/js/j_rekod.js"></script>

@endsection