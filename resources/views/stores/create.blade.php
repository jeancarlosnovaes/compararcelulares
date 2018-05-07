@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Stores</h3>
        </div>

        <div class="card-body">
            @include('adminlte-templates::common.errors')
            {{ Form::open(['route' => 'stores.store', 'files' => true]) }}
                @include('stores.fields')
            {{ Form::close() }}
        </div>
    </div>
@endsection
