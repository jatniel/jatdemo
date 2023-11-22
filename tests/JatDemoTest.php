<?php

namespace tests;

use JatDemo\JatDemo;
use PHPUnit\Framework\TestCase;

class JatDemoTest extends TestCase
{
    public function testHelloDev()
    {
        $jatDemo = new JatDemo();
        $this->assertEquals('Hello Dev!', $jatDemo->helloDev());
    }
}
