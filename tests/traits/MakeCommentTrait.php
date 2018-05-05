<?php

use Faker\Factory as Faker;
use App\Models\Comment;
use App\Repositories\CommentRepository;

trait MakeCommentTrait
{
    /**
     * Create fake instance of Comment and save it in database
     *
     * @param array $commentFields
     * @return Comment
     */
    public function makeComment($commentFields = [])
    {
        /** @var CommentRepository $commentRepo */
        $commentRepo = App::make(CommentRepository::class);
        $theme = $this->fakeCommentData($commentFields);
        return $commentRepo->create($theme);
    }

    /**
     * Get fake instance of Comment
     *
     * @param array $commentFields
     * @return Comment
     */
    public function fakeComment($commentFields = [])
    {
        return new Comment($this->fakeCommentData($commentFields));
    }

    /**
     * Get fake data of Comment
     *
     * @param array $postFields
     * @return array
     */
    public function fakeCommentData($commentFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'when_bought' => $fake->word,
            'resistant_scratchs_and_falling' => $fake->word,
            'is_beautiful' => $fake->word,
            'comfortable' => $fake->word,
            'good_vision_in_the_sun' => $fake->word,
            'works_well_in_daily_use' => $fake->word,
            'demanding_games' => $fake->word,
            'good_sound' => $fake->word,
            'daytime_photos' => $fake->word,
            'night_photos' => $fake->word,
            'quality_selfies' => $fake->word,
            'powerful_flash' => $fake->word,
            'good_calls' => $fake->word,
            'quality_GPS' => $fake->word,
            'quality_WIFI' => $fake->word,
            'battery_life' => $fake->word,
            'preinstalled_apps' => $fake->word,
            'receive_updates' => $fake->word,
            'opinion_in_a_sentence' => $fake->word,
            'extended_opinion' => $fake->text,
            'pros' => $fake->word,
            'cons' => $fake->word,
            'general_opinion' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $commentFields);
    }
}
