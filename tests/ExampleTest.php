<?php

namespace ecdarwin\tests;

class ExampleTest extends \PHPUnit_Framework_TestCase
{
    public function testMethod()
    {
        $example = new \ecdarwin\Example();

        $this->assertTrue($example->run());
    }
}
