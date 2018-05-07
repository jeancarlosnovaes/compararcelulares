@extends('layouts.app') 
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Brands</h3>
        </div>

        <div class="card-body">
            @include('adminlte-templates::common.errors') 
            {{ Form::open(['route' => 'brands.store', 'files' => true]) }} 
                @include('brands.fields') 
            {{ Form::close() }}

        </div>
    </div>
@endsection