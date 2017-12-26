<?php

use Tests\TestCase;

class DemoTest extends TestCase
{
    public function testSomethingIsTrue()
    {
        $this->assertTrue(true);
        $this->visit('/')->see('Laravel 5');
    }
}