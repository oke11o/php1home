<?php

return [
    [
        'name' => 'Home',
        'href' => '/',
        'attrs' => [
            'isActive' => true,
        ],
        'children' => [],
    ],
    [
        'name' => 'Link',
        'href' => '/link',
        'children' => [],
    ],
    [
        'name' => 'Disabled',
        'href' => '',
        'attrs' => [
            'disabled' => true,
        ],
        'children' => [],
    ],
    [
        'name' => 'Dropdown',
        'children' => [
            [
                'name' => 'Action',
                'href' => '/action',
                'children' => [],
            ],
            [
                'name' => 'Other action',
                'href' => '/other-action',
                'children' => [],
            ],
        ],
    ],

];