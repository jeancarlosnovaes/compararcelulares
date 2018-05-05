<?php

use App\Models\Smartphone;
use App\Repositories\SmartphoneRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SmartphoneRepositoryTest extends TestCase
{
    use MakeSmartphoneTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var SmartphoneRepository
     */
    protected $smartphoneRepo;

    public function setUp()
    {
        parent::setUp();
        $this->smartphoneRepo = App::make(SmartphoneRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateSmartphone()
    {
        $smartphone = $this->fakeSmartphoneData();
        $createdSmartphone = $this->smartphoneRepo->create($smartphone);
        $createdSmartphone = $createdSmartphone->toArray();
        $this->assertArrayHasKey('id', $createdSmartphone);
        $this->assertNotNull($createdSmartphone['id'], 'Created Smartphone must have id specified');
        $this->assertNotNull(Smartphone::find($createdSmartphone['id']), 'Smartphone with given id must be in DB');
        $this->assertModelData($smartphone, $createdSmartphone);
    }

    /**
     * @test read
     */
    public function testReadSmartphone()
    {
        $smartphone = $this->makeSmartphone();
        $dbSmartphone = $this->smartphoneRepo->find($smartphone->id);
        $dbSmartphone = $dbSmartphone->toArray();
        $this->assertModelData($smartphone->toArray(), $dbSmartphone);
    }

    /**
     * @test update
     */
    public function testUpdateSmartphone()
    {
        $smartphone = $this->makeSmartphone();
        $fakeSmartphone = $this->fakeSmartphoneData();
        $updatedSmartphone = $this->smartphoneRepo->update($fakeSmartphone, $smartphone->id);
        $this->assertModelData($fakeSmartphone, $updatedSmartphone->toArray());
        $dbSmartphone = $this->smartphoneRepo->find($smartphone->id);
        $this->assertModelData($fakeSmartphone, $dbSmartphone->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteSmartphone()
    {
        $smartphone = $this->makeSmartphone();
        $resp = $this->smartphoneRepo->delete($smartphone->id);
        $this->assertTrue($resp);
        $this->assertNull(Smartphone::find($smartphone->id), 'Smartphone should not exist in DB');
    }
}
