<?php

namespace Acme\Tests;

use Acme\Demo;

class DemoTest extends \PHPUnit_Framework_TestCase
{

    public function testMethod()
    {
        $demo = new Demo();

        $this->assertSame(4, $demo->sum(2, 2));
    }
}
