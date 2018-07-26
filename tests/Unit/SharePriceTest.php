<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SharePriceTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPrice()
    {
       $price = new \App\Sharemarket;
       $price->setPrice(100);
       $this->assertEquals($price->getPrice(),'100');
    }
}
