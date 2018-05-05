<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\Models\VerificationToken;
use App\Events\UserRequestedVerificationEmail;

class VerificationController extends Controller {
    public function verify( VerificationToken $token ) {  
             
        $token->user()->update([
            'active' => true
        ]);

        $token->delete();

        // Uncomment the following lines if you want to login the user 
        // directly upon email verification
        // Auth::login( $token->user );
        // return redirect( '/home' );

        return redirect( '/login' )->with( 'status', 'Email verification successful. Please login again' );
    }

    public function resend( Request $request ) {

        $user = User::byEmail( $request->email )->FirstOrFail();
       
        if( $user->hasVerifiedEmail() ) {
            return redirect( '/home' )->with( 'status', 'Your email has already been verified' );
        }

        event( new UserRequestedVerificationEmail( $user ) );

        return redirect( '/login' )->with( 'status', 'Verification e-mail resent. Please check your inbox' );
    }
}
