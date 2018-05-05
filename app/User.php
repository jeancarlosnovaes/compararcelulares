<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'active',
    ];

    public function socialProviders() {
        return $this->hasMany( 'App\Models\SocialProvider' );
    }

    public function verificationToken() {
        return $this->hasOne( 'App\Models\VerificationToken' );
    }

    public function userreview() {
        return $this->hasMany( 'App\Models\UserReview' );
    }
    
    public function hasVerifiedEmail() {
        return $this->active;
    }

    public static function byEmail( $email ) {
        return User::where( 'email', $email );
    }
}
