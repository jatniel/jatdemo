<?php

/*
* A simple Hello World - dev PHP package
* @package JatDemo
* @author Jatniel Guzmán
* @version 1.1.1
* @license MIT
* @copyright 2025 Jatniel Guzmán
* @link https://jatniel.dev
*/

declare(strict_types=1);

namespace JatDemo\Tests;

use JatDemo\JatDemo;
use PHPUnit\Framework\TestCase;

class JatDemoTest extends TestCase
{
    public function testHelloDev(): void
    {
        $jatDemo = new JatDemo();
        $this->assertSame('Hello Dev!', $jatDemo->helloDev());
    }

    public function testHelloWithCustomName(): void
    {
        $jatDemo = new JatDemo();
        $this->assertSame('Hello Jatniel!', $jatDemo->hello('Jatniel'));
    }

    public function testHelloRejectsEmptyName(): void
    {
        $jatDemo = new JatDemo();

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Name cannot be empty.');

        $jatDemo->hello('   ');
    }
}
