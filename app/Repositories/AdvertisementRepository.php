<?php

namespace App\Repositories;

use App\Models\Advertisement;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AdvertisementRepository
 * @package App\Repositories
 * @version April 30, 2018, 2:02 pm UTC
 *
 * @method Advertisement findWithoutFail( $id, $columns = [ '*' ] )
 * @method Advertisement find( $id, $columns = [ '*' ] )
 * @method Advertisement first( $columns = [ '*' ] )
*/
class AdvertisementRepository extends BaseRepository {
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model() {
        return Advertisement::class;
    }
}
