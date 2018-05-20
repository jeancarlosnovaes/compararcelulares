@extends('layouts.app') @section('content')
<div class="col-md-3">
    <!-- Profile Image -->
    <div class="card card-primary card-outline">
        <div class="card-body box-profile">
            <h3 class="profile-username text-center">{{ auth()->user()->name }}</h3>

            <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                    <b>E-mail</b>
                    <a class="float-right">{{ auth()->user()->email }}</a>
                </li>
            </ul>

            <a href="{{ url( 'users/' . auth()->user()->id . '/edit' ) }}" class="btn btn-primary btn-block">
                <b>Edit Profile</b>
            </a>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

<div class="col-md-3">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tablets</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Product</th>
                    <th>Quantity</th>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Tablets</td>
                    <td>
                        @if ( isset( $tablets[0]->brand->countTablet ) ){{ $tablets[0]->brand->countTablet }} @endif
                    </td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Smartphones</td>
                    <td>
                        @if ( isset( $smartphones[0]->brand->countSmartphone ) ) {{ $smartphones[0]->brand->countSmartphone }} @endif
                    </td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Ofertas</td>
                    <td>
                        Oi
                    </td>
                </tr>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.col -->
@endsection {{--
<div class="card"> --}} {{--
    <div class="card-header">Dashboard</div>

    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif You are logged in!
    </div> --}}