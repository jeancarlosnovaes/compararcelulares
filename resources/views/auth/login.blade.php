@extends('layouts.auth')

@section('content')
    <section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<a href="{{ url('/') }}"><img src="../img/logo.jpg"></a>
					</div>
					<div class="card fat">
						@if( session( 'status' ) )
							<div class="alert alert-warning text-center"> 
								{!! session( 'status' ) !!}
							</div>
						@endif
						<div class="card-body">
							<h4 class="card-title">{{ __('Login') }}</h4>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
							 
								<div class="form-group">
									<label for="email">{{ __('E-Mail Address') }}</label>

									<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                    
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

								<div class="form-group">
									<label for="password">{{ __('Password') }}
										<a href="{{ route('password.request') }}" class="float-right">
                                                {{ __('Forgot Your Password?') }}
										</a>
									</label>
									<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required data-eye>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>

								<div class="form-group">
									<label>
										<input type="checkbox" name="remember"{{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
									</label>
								</div>

								<div class="form-group no-margin">
									<button type="submit" class="btn btn-primary btn-block">
                                            {{ __('Login') }}
									</button>
								</div>
								<div class="margin-top20 text-center">
									Don't have an account? <a href="{{ route('register') }}">Create One</a>
								</div>
							</form>
							<div class="social-auth-links text-center mb-3">
								<p>- OR -</p>
								<a href="/auth/facebook" class="btn btn-primary btn-block">
								  	<i class="fab fa-facebook-f mr-2"></i> Sign in using Facebook
								</a>
								<a href="/auth/google" class="btn btn-danger btn-block">
								 	<i class="fab fa-google-plus-g mr-2"></i> Sign in using Google+
								</a>
								<a href="/auth/twitter" class="btn btn-twitter btn-block">
								 	<i class="fab fa-twitter mr-2"></i> Sign in using Twitter
								</a>
							</div>
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