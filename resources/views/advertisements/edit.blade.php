@extends('layouts.app') 
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Advertisements</h3>
    </div>

    <div class="card-body">
        @include('adminlte-templates::common.errors') 
        {!! Form::model($advertisement, ['route' => ['advertisements.update', $advertisement->id], 'method' => 'patch']) !!} 
            @include('advertisements.fields') 
        {!! Form::close() !!}

    </div>
</div>
@endsection