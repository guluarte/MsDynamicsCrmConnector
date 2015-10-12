<?php

namespace Guluarte\MsDynamicsCrmConnector\Tests\Unit;

use Guluarte\MsDynamicsCrmConnector\HelloWorld;

class HelloWorldTest extends \PHPUnit_Framework_TestCase
{
    public function testSayHi()
    {
        $hello = new HelloWorld('hal9087');
        $this->assertEquals('Hello hal9087!', $hello->sayHi());
    }
}
