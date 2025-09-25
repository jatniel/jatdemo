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

namespace JatDemo;

class JatDemo
{
    /**
     * Returns a generic greeting intended for developers.
     */
    public function helloDev(): string
    {
        return $this->hello();
    }

    /**
     * Returns a greeting for the provided name.
     */
    public function hello(string $name = 'Dev'): string
    {
        $trimmedName = trim($name);

        if ($trimmedName === '') {
            throw new \InvalidArgumentException('Name cannot be empty.');
        }

        return sprintf('Hello %s!', $trimmedName);
    }
}
