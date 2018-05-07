@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tablets</h3>
        </div>

        <div class="card-body">
            @include('adminlte-templates::common.errors')
            {{ Form::model($tablet, ['route' => ['tablets.update', $tablet->id], 'method' => 'patch', 'files' => true]) }}
                @include('tablets.fields')
            {{ Form::close() }}
       </div>
   </div>
@endsection