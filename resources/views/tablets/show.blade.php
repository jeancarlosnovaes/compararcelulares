@extends('layouts.app') 
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tablet</h3>
        </div>

        <div class="card-body">
            @include('tablets.show_fields')
            <a href="{{ route('tablets.index') }}" class="btn btn-default">Back</a>
        </div>
    </div>
@endsection