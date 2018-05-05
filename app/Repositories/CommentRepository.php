<?php

namespace App\Repositories;

use App\Models\Comment;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CommentRepository
 * @package App\Repositories
 * @version May 1, 2018, 12:43 pm UTC
 *
 * @method Comment findWithoutFail( $id, $columns = [ '*' ] )
 * @method Comment find( $id, $columns = [ '*' ] )
 * @method Comment first( $columns = [ '*' ] )
*/
class CommentRepository extends BaseRepository {
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'when_bought',
        'resistant_scratchs_and_falling',
        'is_beautiful',
        'comfortable',
        'good_vision_in_the_sun',
        'works_well_in_daily_use',
        'demanding_games',
        'good_sound',
        'daytime_photos',
        'night_photos',
        'quality_selfies',
        'powerful_flash',
        'good_calls',
        'quality_GPS',
        'quality_WIFI',
        'battery_life',
        'preinstalled_apps',
        'receive_updates',
        'opinion_in_a_sentence',
        'extended_opinion',
        'pros',
        'cons',
        'general_opinion'
    ];

    /**
     * Configure the Model
     **/
    public function model() {
        return Comment::class;
    }
}
