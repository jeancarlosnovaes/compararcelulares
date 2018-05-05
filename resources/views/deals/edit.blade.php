@extends('layouts.app') 
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Deals</h3>
        </div>

        <div class="card-body">
            @include('adminlte-templates::common.errors')
            {{--
            <form action="{{ route( 'deals.update', [ 'id' => $deals->id ] ) }}">
                @csrf @method( 'PATCH' ) @include('deals.fields')
            </form> --}} {!! Form::model($deals, ['route' => ['deals.update', $deals->id], 'method' => 'patch'])
            !!} @include('deals.fields') {!! Form::close() !!}  
        </div>
    </div>
@endsection