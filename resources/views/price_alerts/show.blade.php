@extends('layouts.app') 
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Price Alert</h3>
        </div>

        <div class="card-body">
            @include('priceAlerts.show_fields')
            <a href="{{ route('priceAlerts.index') }}" class="btn btn-default">Back</a>
        </div>
    </div>
@endsection