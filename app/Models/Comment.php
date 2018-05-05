<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Comment",
 *      required={ "" },
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="opinion_in_a_sentence",
 *          description="opinion_in_a_sentence",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="extended_opinion",
 *          description="extended_opinion",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="created_at",
 *          description="created_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="updated_at",
 *          description="updated_at",
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */
class Comment extends Model {
    use SoftDeletes;

    public $table = 'comments';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'when_bought',
        'resistant_scratchs_and_falling',
        'is_beautiful',
        'comfortable',
        'good_vision_in_the_sun',
        'works_well_in_daily_use',
        'demanding_games',
        'good_sound',
        'daytime_photos',
        'night_photos',
        'quality_selfies',
        'powerful_flash',
        'good_calls',
        'quality_GPS',
        'quality_WIFI',
        'battery_life',
        'preinstalled_apps',
        'receive_updates',
        'opinion_in_a_sentence',
        'extended_opinion',
        'pros',
        'cons',
        'general_opinion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'opinion_in_a_sentence' => 'string',
        'extended_opinion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function user() {
        return $this->belongsTo( 'App\User' );
    }

    public function smartphone() {
        return $this->belongsTo( 'App\Models\Smartphone' );
    }

    public function Tablet() {
        return $this->belongsTo( 'App\Models\Tablet' );
    }    
}
