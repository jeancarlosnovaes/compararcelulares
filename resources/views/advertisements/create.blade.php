@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Advertisements</h3>
        </div>

        <div class="card-body">
            @include('adminlte-templates::common.errors')
            {!! Form::open(['route' => 'advertisements.store']) !!}
                @include('advertisements.fields')
            {!! Form::close() !!}
        </div>
    </div>
@endsection
