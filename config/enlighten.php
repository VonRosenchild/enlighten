<?php

return [
    'enabled' => true,

    // Display/hide quick access links to open your IDE from the UI
    'developer_mode' => true,
    'editor' => 'phpstorm', // phpstorm, vscode or sublime

    'tests' => [
        // Add expressions to ignore test class names and test method names.
        // i.e. Tests\Unit\* will ignore all tests in the Tests\Unit\ suite,
        // validates_* will ignore all the tests that start with validates_.
        // Ignored tests won't be persisted as examples in the Enlighten DB.
        'ignore' => [],
    ],

    // - PRESENTATION OPTIONS:

    'request' => [
        'headers' => [
            'hide' => [],
            'overwrite' => [],
        ],
        'query' => [
            'hide' => [],
            'overwrite' => [],
        ],
        'input' => [
            'hide' => [],
            'overwrite' => [],
        ],
    ],

    'response' => [
        'headers' => [
            'hide' => [],
            'overwrite' => [],
        ]
    ],

    // Configure all the areas that will be shown in the frontend.
    // Each area represents a "test suite" in the tests/ folder.
    // 'areas' => [...],

    // Group your tests-classes as "modules", you can use a regular expression
    // to find all the classes that match with the given pattern or patterns:
    'modules' => [
        [
            'name' => 'Users',
            'pattern' => ['*Users*']
        ],
        [
            'name' => 'Other Modules',
            'pattern' => ['*'],
        ],
    ]
];
