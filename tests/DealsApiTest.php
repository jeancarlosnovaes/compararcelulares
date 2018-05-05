<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DealsApiTest extends TestCase {
    use MakeDealsTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateDeals() {
        $deals = $this->fakeDealsData();
        $this->json( 'POST', '/api/v1/deals', $deals );

        $this->assertApiResponse( $deals );
    }

    /**
     * @test
     */
    public function testReadDeals() {
        $deals = $this->makeDeals();
        $this->json( 'GET', '/api/v1/deals/'.$deals->id );

        $this->assertApiResponse( $deals->toArray() );
    }

    /**
     * @test
     */
    public function testUpdateDeals() {
        $deals = $this->makeDeals();
        $editedDeals = $this->fakeDealsData();

        $this->json( 'PUT', '/api/v1/deals/'.$deals->id, $editedDeals );

        $this->assertApiResponse( $editedDeals );
    }

    /**
     * @test
     */
    public function testDeleteDeals() {
        $deals = $this->makeDeals();
        $this->json( 'DELETE', '/api/v1/deals/'.$deals->id );

        $this->assertApiSuccess();
        $this->json( 'GET', '/api/v1/deals/'.$deals->id );

        $this->assertResponseStatus( 404 );
    }
}
