<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialProvider extends Model {
    protected $fillable = [
        'provider_id', 'provider',
    ];

    public function setUpdatedAtAttribute() {
        $this->updated_at = false;
    }

    function user() {
        return $this->belongsTo( 'App\User' );
    }
}
