<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Coupon",
 *      required={"title", "url", "start_date", "end_date"},
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
 *          property="image",
 *          description="image",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="url",
 *          description="url",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="code",
 *          description="code",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="discount",
 *          description="discount",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="start_date",
 *          description="start_date",
 *          type="string",
 *          format="date"
 *      ),
 *      @SWG\Property(
 *          property="end_date",
 *          description="end_date",
 *          type="string",
 *          format="date"
 *      ),
 *      @SWG\Property(
 *          property="vote_yes",
 *          description="vote_yes",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="vote_no",
 *          description="vote_no",
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
class Coupon extends Model {
    use SoftDeletes;

    public $table = 'coupons';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'description',
        'image',
        'url',
        'code',
        'discount',
        'start_date',
        'end_date',
        'category',
        'vote_yes',
        'vote_no'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'image' => 'string',
        'url' => 'string',
        'code' => 'string',
        'discount' => 'string',
        'start_date' => 'date',
        'end_date' => 'date',
        'vote_yes' => 'integer',
        'vote_no' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'url' => 'required',
        'start_date' => 'required',
        'end_date' => 'required'
    ];

    
}
