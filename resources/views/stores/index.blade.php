@extends('layouts.app')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Stores</h1>
                <a role="button" class="btn btn-success" href="{{ route( 'stores.create' ) }}">
                    <i class="fas fa-plus-circle"></i>
                    Add New
                </a>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/home') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Stores</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>


<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Stores</h3>
                </div>
                @include('flash::message')
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="container-fluid">
                        @include('stores.table')
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
@endsection
