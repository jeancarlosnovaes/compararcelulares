<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\User;

class VerificationToken extends Model {

    protected $fillable = [ 'token' ];
    
    public function getRouteKeyName() {
        return 'token';
    }

    public function user() {
	    return $this->belongsTo( 'App\User' );
    }
}
