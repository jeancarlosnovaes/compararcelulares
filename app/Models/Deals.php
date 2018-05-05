<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Deals",
 *      required={ "title", "url" },
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="title",
 *          description="title",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="price_old",
 *          description="price_old",
 *          type="number",
 *          format="float"
 *      ),
 *      @SWG\Property(
 *          property="price",
 *          description="price",
 *          type="number",
 *          format="float"
 *      ),
 *      @SWG\Property(
 *          property="url",
 *          description="url",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="report",
 *          description="report",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="store_id",
 *          description="store_id",
 *          type="integer",
 *          format="int32"
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
class Deals extends Model {
    use SoftDeletes;

    public $table = 'deals';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'description',
        'price_old',
        'price',
        'url',
        'report',
        'store_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'price_old' => 'float',
        'price' => 'float',
        'url' => 'string',
        'report' => 'boolean',
        'store_id' => 'integer'
    ];

    /**
     * Set default attributes report
     * 
     * @var array
     */
    protected $attributes = [
        'report' => false
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'price_old' => 'numeric',
        'price' => 'numeric',
        'url' => 'required'
    ];

    public function store() {
        return $this->belongsTo( 'App\Models\Store' );
    }
}
