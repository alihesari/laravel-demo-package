<?php

class DemoTest extends PHPUnit_Framework_TestCase
{
    public function testSomethingIsTrue()
    {
        $this->assertTrue(true);
        $this->visit('/')->see('Laravel 5');
    }
}