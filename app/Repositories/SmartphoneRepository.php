<?php

namespace App\Repositories;

use App\Models\Smartphone;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SmartphoneRepository
 * @package App\Repositories
 * @version April 30, 2018, 3:17 pm UTC
 *
 * @method Smartphone findWithoutFail( $id, $columns = [ '*' ] )
 * @method Smartphone find( $id, $columns = [ '*' ] )
 * @method Smartphone first( $columns = [ '*' ] )
*/
class SmartphoneRepository extends BaseRepository {
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
        return Smartphone::class;
    }
}
