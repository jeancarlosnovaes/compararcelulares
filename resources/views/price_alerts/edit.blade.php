@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Price Alert
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($priceAlert, ['route' => ['priceAlerts.update', $priceAlert->id], 'method' => 'patch']) !!}

                        @include('price_alerts.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection