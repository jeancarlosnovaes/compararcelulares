<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }

    public function edit( User $user ) {   
        $user = Auth::user();
        return view( 'users.edit', compact( 'user' ) );
    }

    public function update( User $user ) { 
        if( Auth::user()->email == request( 'email' ) ) {
            $this->validate( request(), [
                'name' => 'required',
            ]);
    
            $user->name = request('name');

            if( !$user->password == '') {
                $user->password = bcrypt(request('password'));
            }
    
            $user->save();
    
            return back()->with( 'status','User updated successfull' );
        }else{

            $this->validate( request(), [
                'name' => 'required',
                'email' => 'required|email|unique:users',
            ]);

            $user->name = request('name');
            $user->email = request('email');
            if( !$user->password == '') {
                $user->password = bcrypt (request( 'password' ) );
            }

            $user->save();

            return back()->with( 'status','User updated successfull' );
        }
    }
}
