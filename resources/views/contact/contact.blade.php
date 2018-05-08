@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Contact Us</h3>
        </div>
        
        @if(session('message'))
            <div class='alert alert-success'>
                {{ session( 'message' ) }}
            </div>
        @endif
    
        <div class="card-body">
            <form class="form-horizontal" method="POST" action="/contact">
                @csrf 
                <div class="form-group">
                <label for="Name">Name: </label>
                <input type="text" class="form-control" id="name" placeholder="Your name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email: </label>
                <input type="text" class="form-control" id="email" placeholder="john@example.com" name="email" required>
            </div>

            <div class="form-group">
                <label for="message">message: </label>
                <textarea type="text" class="form-control luna-message" id="message" rows="10" placeholder="Type your messages here" name="message" required></textarea>
            </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary" value="Send">Send</button>
                </div>
            </form>
        </div>
    </div> <!-- /container -->
@endsection