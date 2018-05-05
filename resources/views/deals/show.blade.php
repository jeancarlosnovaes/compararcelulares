@extends('layouts.app') @section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Deals</h3>
        </div>

        <div class="card-body">
            @include('deals.show_fields')
            <a href="{!! route('deals.index') !!}" class="btn btn-default">Back</a>
        </div>
    </div>
@endsection