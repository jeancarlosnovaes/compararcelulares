@extends('layouts.app') 
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Comments</h3>
        </div>

        <div class="card-body">
            @include('comments.show_fields')
            <a href="{!! route('comments.index') !!}" class="btn btn-default">Back</a>
        </div>
    </div>
@endsection