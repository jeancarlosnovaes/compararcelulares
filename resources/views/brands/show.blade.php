@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Brand</h3>
        </div>

        <div class="card-body">
            @include('brands.show_fields')
            <a href="{{ route('brands.index') }}" class="btn btn-default">Back</a>
        </div>
    </div>
@endsection