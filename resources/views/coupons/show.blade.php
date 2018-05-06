@extends('layouts.app') 
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Coupon</h3>
        </div>

        <div class="card-body">
            @include('coupons.show_fields')
            <a href="{{ route('coupons.index') }}" class="btn btn-default">Back</a>
        </div>
    </div>
@endsection