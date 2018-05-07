@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tablets</h3>
        </div>

        <div class="card-body">
            @include('adminlte-templates::common.errors')
            {{ Form::open(['route' => 'tablets.store', 'files' => true]) }}
                @include('tablets.fields')
            {{ Form::close() }}
        </div>
    </div>
@endsection
