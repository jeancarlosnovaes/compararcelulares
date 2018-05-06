@extends('layouts.app') 
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Smartphone</h3>
        </div>

        <div class="card-body">
            @include('smartphones.show_fields')
            <a href="{!! route('smartphones.index') !!}" class="btn btn-default">Back</a>
        </div>
    </div>
@endsection