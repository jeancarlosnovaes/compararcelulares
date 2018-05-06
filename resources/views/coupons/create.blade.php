@extends('layouts.app') 
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Coupons</h3>
        </div>

        <div class="card-body">
            @include('adminlte-templates::common.errors') 
            {!! Form::open(['route' => 'coupons.store']) !!} 
                @include('coupons.fields')
            {!! Form::close() !!}

        </div>
    </div>
@endsection