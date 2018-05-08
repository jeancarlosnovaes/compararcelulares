@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Contact Us</h3>
        </div>
        
        @if( session( 'message' ) )
            <div class='alert alert-success'>
                {{ session( 'message' ) }}
            </div>
        @endif
    
        <div class="card-body">
            <form class="form-horizontal" method="POST" action="/contact">
                @csrf 
                <div class="form-group">
                <label for="Name">Name: </label>
                <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" placeholder="Your name" name="name" required autofocus>
                @if ($errors->has('name'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="email">Email: </label>
                <input type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" placeholder="john@example.com" name="email" required>
                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="message">message: </label>
                <textarea type="text" class="form-control luna-message{{ $errors->has('message') ? ' is-invalid' : '' }}" id="message" rows="10" placeholder="Type your messages here" name="message" required></textarea>
                @if ($errors->has('message'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('message') }}</strong>
                    </span>
                @endif
            </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary" value="Send">Send</button>
                </div>
            </form>
        </div>
    </div> <!-- /container -->
@endsection