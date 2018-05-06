@extends('layouts.app') 
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Smartphones</h3>
        </div>

        <div class="card-body">
            @include('adminlte-templates::common.errors') 
            {!! Form::open(['route' => 'smartphones.store']) !!} 
                @include('smartphones.fields')
            {!! Form::close() !!}
        </div>
    </div>
@endsection