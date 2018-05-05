<?php

use App\Models\Tablet;
use App\Repositories\TabletRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TabletRepositoryTest extends TestCase
{
    use MakeTabletTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var TabletRepository
     */
    protected $tabletRepo;

    public function setUp()
    {
        parent::setUp();
        $this->tabletRepo = App::make(TabletRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateTablet()
    {
        $tablet = $this->fakeTabletData();
        $createdTablet = $this->tabletRepo->create($tablet);
        $createdTablet = $createdTablet->toArray();
        $this->assertArrayHasKey('id', $createdTablet);
        $this->assertNotNull($createdTablet['id'], 'Created Tablet must have id specified');
        $this->assertNotNull(Tablet::find($createdTablet['id']), 'Tablet with given id must be in DB');
        $this->assertModelData($tablet, $createdTablet);
    }

    /**
     * @test read
     */
    public function testReadTablet()
    {
        $tablet = $this->makeTablet();
        $dbTablet = $this->tabletRepo->find($tablet->id);
        $dbTablet = $dbTablet->toArray();
        $this->assertModelData($tablet->toArray(), $dbTablet);
    }

    /**
     * @test update
     */
    public function testUpdateTablet()
    {
        $tablet = $this->makeTablet();
        $fakeTablet = $this->fakeTabletData();
        $updatedTablet = $this->tabletRepo->update($fakeTablet, $tablet->id);
        $this->assertModelData($fakeTablet, $updatedTablet->toArray());
        $dbTablet = $this->tabletRepo->find($tablet->id);
        $this->assertModelData($fakeTablet, $dbTablet->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteTablet()
    {
        $tablet = $this->makeTablet();
        $resp = $this->tabletRepo->delete($tablet->id);
        $this->assertTrue($resp);
        $this->assertNull(Tablet::find($tablet->id), 'Tablet should not exist in DB');
    }
}
