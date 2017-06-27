<?php

$finder = PhpCsFixer\Finder::create()
    ->in('src');

return PhpCsFixer\Config::create()
    ->setRules([
        '@PSR2' => true,
        'array_syntax' => ['syntax' => 'short'],
        'ordered_imports' => true,
        'single_quote' => true
    ])
    ->setFinder($finder);
