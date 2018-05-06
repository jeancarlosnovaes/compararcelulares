@extends('layouts.app') 
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Store</h3>
        </div>

        <div class="card-body">
            @include('stores.show_fields')
            <a href="{!! route('stores.index') !!}" class="btn btn-default">Back</a>
        </div>
    </div>
@endsection