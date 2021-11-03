<?php

declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->exclude([
        'bootstrap/cache',
        'storage',
        'node_modules',
        'vendor',
        'public',
    ])
    ->name('*.php')
    ->notName('*.blade.php')
    ->notPath('_ide_helper.php')
    ->ignoreDotFiles(true)
;

$config = new PhpCsFixer\Config();
$config
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR2' => true,

        // Use statements should be ordered.
        'ordered_imports' => ['sort_algorithm' => 'length'],

        // Unused use statements must be removed.
        'no_unused_imports' => true,

        // Remove trailing whitespace at the end of blank lines.
        'no_whitespace_in_blank_line' => true,

        // There MUST be one blank line after the namespace declaration.
        'blank_line_after_namespace' => true,

        // Each namespace use MUST go on its own line and there MUST be one blank line after the use statements block.
        'single_line_after_imports' => true,

        // Ensure there is no code on the same line as the PHP open tag and it is followed by a blankline.
        'blank_line_after_opening_tag' => true,

        // Remove duplicated semicolons.
        'no_empty_statement' => true,

        // Convert double quotes to single quotes for simple strings.
        'single_quote' => true,

        // Use the short array syntax: []
        'array_syntax' => ['syntax' => 'short'],

        // Logical NOT operators (!) should have one trailing whitespace.
        'not_operator_with_successor_space' => true,
    ])
    ->setFinder($finder)
;

return $config;
