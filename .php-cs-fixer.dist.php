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

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = Finder::create()
    ->in(__DIR__ . '/src')
    ->in(__DIR__ . '/tests')
    ->name('*.php');

return (new Config())
    ->setRiskyAllowed(true)
    ->setFinder($finder)
    ->setRules([
        '@PSR12' => true,
        'strict_param' => true,
        'array_syntax' => ['syntax' => 'short'],
        'no_unused_imports' => true,
    ]);

