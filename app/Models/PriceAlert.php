<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="PriceAlert",
 *      required={ "email" },
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="product_id",
 *          description="product_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="product_name",
 *          description="product_name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="email",
 *          description="email",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="activatation_digest",
 *          description="activatation_digest",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="activated",
 *          description="activated",
 *          type="boolean"
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
class PriceAlert extends Model {
    use SoftDeletes;

    public $table = 'price_alerts';
    

    protected $dates = [ 'deleted_at' ];


    public $fillable = [
        'product_id',
        'product_name',
        'email',
        'activatation_digest',
        'activated',
        'activated_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'product_id' => 'integer',
        'product_name' => 'string',
        'email' => 'string',
        'activatation_digest' => 'string',
        'activated' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'email' => 'required|string|email|max:255'
    ];
}
