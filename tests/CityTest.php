<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class CityTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testProvinceAll()
    {
        $response = $this->call('GET', '/api/city');

        $this->assertEquals(200, $response->status());
    }
    public function testProvinceOne()
    {
        $response = $this->call('GET', '/api/city/21');

        $this->assertEquals(200, $response->status());
    }
    public function testProvinceOneFaile()
    {
        $response = $this->call('GET', '/api/province/2x');

        $this->assertEquals(500, $response->status());
    }
}
