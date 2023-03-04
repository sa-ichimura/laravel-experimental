<?php
/*
 * This document has been generated with
 * https://mlocati.github.io/php-cs-fixer-configurator/#version:3.1.0|configurator
 * you can change this configuration by importing this file.
 */
$config = new PhpCsFixer\Config();
return $config
    ->setRules([
        // https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/master/doc/ruleSets/PSR12.rst
        '@PSR12' => true,
        'new_with_braces' => false,
        'self_static_accessor' => true,
        // https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/master/doc/ruleSets/PHP82Migration.rst
        '@PHP82Migration' => true,
        // https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/master/doc/ruleSets/PhpCsFixer.rst
        '@PhpCsFixer' => true,
        // 'self_static_accessor' => true,
    ])
    ->setFinder(
        PhpCsFixer\Finder::create()
            // ->exclude('folder-to-exclude') // if you want to exclude some folders, you can do it like this!
            ->in(__DIR__)
    );
