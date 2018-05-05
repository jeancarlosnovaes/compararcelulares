<?php

use App\Models\Deals;
use App\Repositories\DealsRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DealsRepositoryTest extends TestCase
{
    use MakeDealsTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var DealsRepository
     */
    protected $dealsRepo;

    public function setUp()
    {
        parent::setUp();
        $this->dealsRepo = App::make(DealsRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateDeals()
    {
        $deals = $this->fakeDealsData();
        $createdDeals = $this->dealsRepo->create($deals);
        $createdDeals = $createdDeals->toArray();
        $this->assertArrayHasKey('id', $createdDeals);
        $this->assertNotNull($createdDeals['id'], 'Created Deals must have id specified');
        $this->assertNotNull(Deals::find($createdDeals['id']), 'Deals with given id must be in DB');
        $this->assertModelData($deals, $createdDeals);
    }

    /**
     * @test read
     */
    public function testReadDeals()
    {
        $deals = $this->makeDeals();
        $dbDeals = $this->dealsRepo->find($deals->id);
        $dbDeals = $dbDeals->toArray();
        $this->assertModelData($deals->toArray(), $dbDeals);
    }

    /**
     * @test update
     */
    public function testUpdateDeals()
    {
        $deals = $this->makeDeals();
        $fakeDeals = $this->fakeDealsData();
        $updatedDeals = $this->dealsRepo->update($fakeDeals, $deals->id);
        $this->assertModelData($fakeDeals, $updatedDeals->toArray());
        $dbDeals = $this->dealsRepo->find($deals->id);
        $this->assertModelData($fakeDeals, $dbDeals->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteDeals()
    {
        $deals = $this->makeDeals();
        $resp = $this->dealsRepo->delete($deals->id);
        $this->assertTrue($resp);
        $this->assertNull(Deals::find($deals->id), 'Deals should not exist in DB');
    }
}
