<?php

namespace App\Repositories;

use App\Models\Store;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class StoreRepository
 * @package App\Repositories
 * @version April 29, 2018, 7:35 pm UTC
 *
 * @method Store findWithoutFail( $id, $columns = [ '*' ] )
 * @method Store find( $id, $columns = [ '*' ] )
 * @method Store first( $columns = [ '*' ] )
*/
class StoreRepository extends BaseRepository {
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model() {
        return Store::class;
    }
}
