<?php
/**
 * Package Autoload files
 * 
 */

use Symfony\Component\Finder\Finder;

/**
 * Helpers Autoload
 * 
 */
$files = Finder::create()
               ->files()
               ->in(__DIR__.'/lib/helpers/')
               ->depth(0)
               ->name('*.php')
               ->notName('autoload.php');
 
foreach ($files as $file)
{
    include $file;
}
