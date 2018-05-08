<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller {
    public function show() {
        return view( 'contact.contact' );
    }

    public function mailToAdmin( ContactFormRequest $message, Contact $admin ) {
        $admin->notify( new InboxMessage( $message ) );
        return redirect()->back()->with( 'message', 'thanks for the message! We will get back to you soon!' );
    }
}
