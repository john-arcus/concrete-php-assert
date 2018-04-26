<?php

/**
 * Quick hello world to show the class working.
 *
 * Navigate with the command line to the root of this projecte and run:

 * ```
 * $ php src/helloworld.php
 * ```
 *
 */
namespace ConcretePhpAssert;

require __DIR__ . '/../vendor/autoload.php';

$concreteAssert = new ConcreteAssert();

$foo = 'hello world';

$concreteAssert->assertEquals($foo, $foo);

echo $foo . PHP_EOL;

exit(0);