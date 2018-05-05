<?php

use Faker\Factory as Faker;
use App\Models\Deals;
use App\Repositories\DealsRepository;

trait MakeDealsTrait
{
    /**
     * Create fake instance of Deals and save it in database
     *
     * @param array $dealsFields
     * @return Deals
     */
    public function makeDeals($dealsFields = [])
    {
        /** @var DealsRepository $dealsRepo */
        $dealsRepo = App::make(DealsRepository::class);
        $theme = $this->fakeDealsData($dealsFields);
        return $dealsRepo->create($theme);
    }

    /**
     * Get fake instance of Deals
     *
     * @param array $dealsFields
     * @return Deals
     */
    public function fakeDeals($dealsFields = [])
    {
        return new Deals($this->fakeDealsData($dealsFields));
    }

    /**
     * Get fake data of Deals
     *
     * @param array $postFields
     * @return array
     */
    public function fakeDealsData($dealsFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'title' => $fake->word,
            'description' => $fake->word,
            'price_old' => $fake->randomDigitNotNull,
            'price' => $fake->randomDigitNotNull,
            'url' => $fake->word,
            'report' => $fake->word,
            'store_id' => $fake->randomDigitNotNull,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $dealsFields);
    }
}
