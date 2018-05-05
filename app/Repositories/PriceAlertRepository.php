<?php

namespace App\Repositories;

use App\Models\PriceAlert;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PriceAlertRepository
 * @package App\Repositories
 * @version April 29, 2018, 7:52 pm UTC
 *
 * @method PriceAlert findWithoutFail( $id, $columns = [ '*' ] )
 * @method PriceAlert find( $id, $columns = [ '*' ] )
 * @method PriceAlert first( $columns = [ '*' ] )
*/
class PriceAlertRepository extends BaseRepository {
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'product_name'
    ];

    /**
     * Configure the Model
     **/
    public function model() {
        return PriceAlert::class;
    }
}
