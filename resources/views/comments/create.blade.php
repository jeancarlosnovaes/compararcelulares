@extends('layouts.app') 
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Comments</h3>
        </div>

        <div class="card-body">
            @include('adminlte-templates::common.errors') 
            {!! Form::open(['route' => 'comments.store']) !!} 
                @include('comments.fields')
            {!! Form::close() !!}

        </div>
    </div>
@endsection