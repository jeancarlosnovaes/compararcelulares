@extends('layouts.app')

@extends('layouts.app') 
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Advertisement</h3>
        </div>

        <div class="card-body">
            @include('advertisements.show_fields')
            <a href="{{ route('advertisements.index') }}" class="btn btn-default">Back</a>
        </div>
    </div>
@endsection