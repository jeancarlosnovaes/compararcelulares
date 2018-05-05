@extends('layouts.auth')

@section('content')

<section class="h-100">
    <div class="container h-100">
        <div class="row justify-content-md-center align-items-center h-100">
            <div class="card-wrapper">
                <div class="brand">
                    <a href="{{ url('/') }}"><img src="../img/logo.jpg"></a>
                </div>
                <div class="card fat">
                    <div class="card-body">
                        <h4 class="card-title">{{ __('Reset Password') }}</h4>

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                         
                            <div class="form-group">
                                <label for="email">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                                <div class="form-text text-muted">
                                    By clicking "Reset Password" we will send a password reset link
                                </div>
                            </div>

                            <div class="form-group no-margin">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="footer">
                    @include('layouts.auth-footer')
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
