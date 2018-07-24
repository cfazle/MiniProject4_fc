<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App;


class SharemarketTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCompanyName()
    {
        $stock = new App\Sharemarket;
        $stock->setCompanyName('AIG');
        $this->assertEquals($stock->getCompanyName(), 'AIG');

    }
}
