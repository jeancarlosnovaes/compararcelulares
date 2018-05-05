@extends('layouts.app') 
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Deals</h3>
        </div>

        <div class="card-body">
            @include('adminlte-templates::common.errors') 
            {!! Form::open(['route' => 'deals.store']) !!} 
                @include('deals.fields') 
            {!! Form::close() !!}
        </div>
    </div>
@endsection