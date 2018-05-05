<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TabletApiTest extends TestCase {
    use MakeTabletTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateTablet() {
        $tablet = $this->fakeTabletData();
        $this->json( 'POST', '/api/v1/tablets', $tablet );

        $this->assertApiResponse( $tablet );
    }

    /**
     * @test
     */
    public function testReadTablet() {
        $tablet = $this->makeTablet();
        $this->json( 'GET', '/api/v1/tablets/'.$tablet->id );

        $this->assertApiResponse( $tablet->toArray() );
    }

    /**
     * @test
     */
    public function testUpdateTablet() {
        $tablet = $this->makeTablet();
        $editedTablet = $this->fakeTabletData();

        $this->json( 'PUT', '/api/v1/tablets/'.$tablet->id, $editedTablet );

        $this->assertApiResponse( $editedTablet );
    }

    /**
     * @test
     */
    public function testDeleteTablet() {
        $tablet = $this->makeTablet();
        $this->json( 'DELETE', '/api/v1/tablets/'.$tablet->id );

        $this->assertApiSuccess();
        $this->json( 'GET', '/api/v1/tablets/'.$tablet->id );

        $this->assertResponseStatus( 404 );
    }
}
