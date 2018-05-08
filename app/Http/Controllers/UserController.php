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

    public function update( Request $request, User $user ) { 
        if( $request->password == '' ) {
            $this->validate( $request, [
                'name'      => 'required|min:3|max:50',
                'email'     => 'required|email',
            ]);
    
            $user->name     = $request->name;
            $user->email    = $request->email;    
            $user->save();
    
            return back()->with( 'status','User updated successfull' );
        }else{

            $this->validate( $request, [
                'name'      => 'required|min:3|max:50',
                'email'     => 'required|email',
                'password'  => 'required|confirmed|min:6'
            ]);

            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt( $request->password );
            $user->save();

            return back()->with( 'status','User updated successfull' );
        }
    }
}
