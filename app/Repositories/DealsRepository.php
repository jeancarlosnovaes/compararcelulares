<?php

namespace App\Repositories;

use App\Models\Deals;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DealsRepository
 * @package App\Repositories
 * @version April 30, 2018, 12:16 pm UTC
 *
 * @method Deals findWithoutFail( $id, $columns = [ '*' ] )
 * @method Deals find( $id, $columns = [ '*' ] )
 * @method Deals first( $columns = [ '*' ] )
*/
class DealsRepository extends BaseRepository {
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
        return Deals::class;
    }
}
