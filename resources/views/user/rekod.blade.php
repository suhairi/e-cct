@extends('layouts.app2')

@section('content')

<div class="container">

    {{ Form::open() }}

    <div class="row">
        
        @include('user.includes._utama')

        @include('user.includes._hasil')
        

        
    </div>

    <div class="row">
        
        @include('user.includes._analisa')
        
    </div>

    {{ Form::close() }}
</div>

@endsection

@section('js')

    <script src="/js/j_rekod.js"></script>

@endsection