<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    'stubs' => [
        'action' => [
            'stub' => 'action.stub',
            'test_type' => 'unit',
            'test' => 'action.test',
            'destination' => env('STUBBY_ACTION_PATH', app_path('Actions'))
        ],
        'controller' => [
            'stub' => 'controller.stub',
            'test_type' => 'feature',
            'test' => 'controller.test',
            'destination' => env('STUBBY_CONTROLLER_PATH', app_path('Http/Controllers'))
        ],
        'invokable_controller' => [
            'stub' => 'invokable_controller.stub',
            'test_type' => 'feature',
            'test' => 'invokable_controller.test',
            'destination' => env('STUBBY_CONTROLLER_PATH', app_path('Http/Controllers'))
        ]
    ],
    'test_paths' => [
        'unit' => env('STUBBY_UNIT_TEST_PATH', base_path('tests/Unit')),
        'feature' => env('STUBBY_FEATURE_TEST_PATH', base_path('tests/Feature'))
    ],
    /**
     * You can optionally check out a feature branch for whatever you create, either by passing --branch to the
     * command or by putting the corresponding key from the stubs array above in the create_feature_branch_on_make
     * array below. Example:
     *
     * 'create_feature_branch_on_make' => ['stubby:action', 'stubby:controller']
     */
    'create_feature_branch_on_make' => [],

];