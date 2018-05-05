<?php

namespace App\Repositories;

use App\Models\Tablet;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TabletRepository
 * @package App\Repositories
 * @version April 30, 2018, 6:42 pm UTC
 *
 * @method Tablet findWithoutFail( $id, $columns = [ '*' ] )
 * @method Tablet find( $id, $columns = [ '*' ] )
 * @method Tablet first( $columns = [ '*' ] )
*/
class TabletRepository extends BaseRepository {
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'product_image'
    ];

    /**
     * Configure the Model
     **/
    public function model() {
        return Tablet::class;
    }
}
