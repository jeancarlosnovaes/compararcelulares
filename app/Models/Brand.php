<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Brand",
 *      required={"name"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="name",
 *          description="name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="description",
 *          description="description",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="logo",
 *          description="logo",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="count",
 *          description="count",
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
class Brand extends Model {
    use SoftDeletes;

    public $table = 'brands';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'description',
        'logo',
        'count'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'description' => 'string',
        'logo' => 'string',
        'count' => 'integer'
    ];

    /**
     * Set default attributes count
     * 
     * @var array
     */
    protected $attributes = [
        'count' => 0
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'logo' => 'required | mimes:jpeg,jpg,png,svg,gif | max:2048'
    ];

    public function smartphone() {
        return $this->hasMany( 'App\Models\Smartphone' );
    }

    public function tablet() {
        return $this->hasMany( 'App\Models\Tablet' );
    }
}
