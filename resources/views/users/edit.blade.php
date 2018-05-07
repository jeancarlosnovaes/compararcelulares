@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Deals</h3>
        </div>
        @if( session( 'status' ) )
            <div class="alert alert-success text-center"> 
                {!! session( 'status' ) !!}
            </div>
        @endif
        <div class="card-body">

            <form method="post" action="{{ route( 'users.update', $user ) }}">
                @csrf 
                @method('patch')
                <div class="form-group">
                    <label for="email">Name</label>
                    <input class="form-control form-control-lg" type="text" name="name" value="{{ $user->name }}" />
                </div>

                <div class="form-group">
                <label for="email">Email address</label>
                    <input class="form-control form-control-lg" type="email" name="email" value="{{ $user->email }}" />
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control form-control-lg" type="password" name="password" />
                </div>
                <div class="form-group">
                    <label for="password-confirmation">Password</label>
                    <input class="form-control form-control-lg" type="password" name="password_confirmation" />
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection