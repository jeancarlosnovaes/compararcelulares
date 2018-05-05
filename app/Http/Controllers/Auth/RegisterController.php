<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller {
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware( 'guest' );
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator( array $data ) {
        return Validator::make( $data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create( array $data ) {
        return User::create([
            'name' => $data[ 'name' ],
            'email' => $data[ 'email' ],
            'password' => Hash::make( $data[ 'password' ] ),
        ]);
    }

    protected function registered( Request $request, $user ) {
        $this->guard()->logout();
        return redirect( '/login' )->with( 'status', 'Please verify your e-mail' );
    }

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider( $provider ) {
        return Socialite::driver( $provider )->redirect();
    }
    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback( $provider ) {
        try {
            $socialUser = Socialite::driver( $provider )->user();
        }catch( \Exception $e ) {
            return redirect('/');
        }
        //check if we have logged provider
        $socialProvider = SocialProvider::where( 'provider_id', $socialUser->getId() )->first();
        if( !$socialProvider ) {
            //create a new user and provider
            $user = User::firstOrCreate(
                [ 'email'        => $socialUser->getEmail() ],
                [ 'name'         => $socialUser->getName() ]
            );
            $user->socialProviders()->create(
                [ 'provider_id' => $socialUser->getId(), 'provider' => $provider ]
            );
        }else{
            $user = $socialProvider->user;
        }
        auth()->login( $user );
        return redirect( '/home' );
    }
}
