@extends('layouts.auth')

@section('content')
    <section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<a href="{{ url('/') }}"><img src="img/logo.jpg"></a>
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">{{ __('Register') }}</h4>
							<form method="POST" action="{{ route('register') }}">
							 
								<div class="form-group">
									<label for="name">{{ __('Name') }}</label>
									<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                    
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>

								<div class="form-group">
									<label for="email">{{ __('E-Mail Address') }}</label>
									<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                    
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

								<div class="form-group">
									<label for="password">{{ __('Password') }}</label>
									<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required data-eye>
                                    
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required data-eye>
                                </div>

								<div class="form-group">
									<label>
										<input type="checkbox" name="aggree" value="1"> I agree to the Terms and Conditions
									</label>
								</div>

								<div class="form-group no-margin">
									<button type="submit" class="btn btn-primary btn-block">
                                        {{ __('Register') }}
									</button>
								</div>
								<div class="margin-top20 text-center">
									Already have an account? <a href="{{ route('login') }}">Login</a>
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
