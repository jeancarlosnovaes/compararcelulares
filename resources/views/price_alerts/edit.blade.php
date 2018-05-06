@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Price Alerts</h3>
        </div>

        <div class="card-body">
            @include('adminlte-templates::common.errors')
            {!! Form::model($priceAlert, ['route' => ['priceAlerts.update', $priceAlert->id], 'method' => 'patch']) !!}
                @include('price_alerts.fields')
            {!! Form::close() !!}
       </div>
   </div>
@endsection