<?php

namespace App\Repositories;

use App\Models\Coupon;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CouponRepository
 * @package App\Repositories
 * @version April 29, 2018, 6:45 pm UTC
 *
 * @method Coupon findWithoutFail($id, $columns = ['*'])
 * @method Coupon find($id, $columns = ['*'])
 * @method Coupon first($columns = ['*'])
*/
class CouponRepository extends BaseRepository {
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title'
    ];

    /**
     * Configure the Model
     **/
    public function model() {
        return Coupon::class;
    }
}
