<?php

namespace Jonlod\LaravelHelpers\Tests;

use Orchestra\Testbench\TestCase;
use Jonlod\LaravelHelpers\LaravelHelpersServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelHelpersServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
