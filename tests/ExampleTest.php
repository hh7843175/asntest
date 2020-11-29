<?php

namespace Nasn\Asn\Tests;

use Orchestra\Testbench\TestCase;
use Nasn\Asn\AsnServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [AsnServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
