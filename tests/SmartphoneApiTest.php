<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SmartphoneApiTest extends TestCase {
    use MakeSmartphoneTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateSmartphone() {
        $smartphone = $this->fakeSmartphoneData();
        $this->json( 'POST', '/api/v1/smartphones', $smartphone );

        $this->assertApiResponse( $smartphone );
    }

    /**
     * @test
     */
    public function testReadSmartphone() {
        $smartphone = $this->makeSmartphone();
        $this->json( 'GET', '/api/v1/smartphones/'.$smartphone->id );

        $this->assertApiResponse( $smartphone->toArray() );
    }

    /**
     * @test
     */
    public function testUpdateSmartphone() {
        $smartphone = $this->makeSmartphone();
        $editedSmartphone = $this->fakeSmartphoneData();

        $this->json( 'PUT', '/api/v1/smartphones/'.$smartphone->id, $editedSmartphone );

        $this->assertApiResponse( $editedSmartphone );
    }

    /**
     * @test
     */
    public function testDeleteSmartphone() {
        $smartphone = $this->makeSmartphone();
        $this->json( 'DELETE', '/api/v1/smartphones/'.$smartphone->id );

        $this->assertApiSuccess();
        $this->json( 'GET', '/api/v1/smartphones/'.$smartphone->id );

        $this->assertResponseStatus( 404 );
    }
}
