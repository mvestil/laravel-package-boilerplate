<?php

namespace Mvestil\Pany\Tests;

use Orchestra\Testbench\TestCase;
use Mvestil\Pany\PanyServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [PanyServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
