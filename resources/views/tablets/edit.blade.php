@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tablet
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tablet, ['route' => ['tablets.update', $tablet->id], 'method' => 'patch']) !!}

                        @include('tablets.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection