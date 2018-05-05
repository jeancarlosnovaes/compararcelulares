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
                            <form method="POST" action="{{ route('password.request') }}">
                                @csrf

                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="form-group">
                                    <label for="email">{{ __('E-Mail Address') }}</label>
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}"
                                        required autofocus> @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="password">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                        required> @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>

                                <div class="form-group no-margin">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        {{ __('Reset Password') }}
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