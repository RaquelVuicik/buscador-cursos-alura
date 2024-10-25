<?php

return [
    "target_php_version" => '7.2.34',
    'directory_list' => [
        'src',
        'vendor/symfony/dom-crawler',
        'vendor/guzzlehttp/guzzle/src',
        'vendor/psr/http-message/src'
    ],
    "exclude_analysis_directory_list" => [
        'vendor/'
    ],
    'plugins' => [
        'AlwaysReturnPlugin',
        'DollarDollarPlugin',
        'DuplicateArrayKeyPlugin',
        'DuplicateExpressionPlugin',
        'PregRegexCheckerPlugin',
        'PrintfCheckerPlugin',
        'SleepCheckerPlugin',
        'UnreachableCodePlugin',
        'UseReturnValuePlugin',
    ],
];