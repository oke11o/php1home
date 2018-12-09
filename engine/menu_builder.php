<?php

return [
    [
        'name' => 'Домой',
        'href' => '/',
        'attrs' => [
        ],
        'children' => [],
    ],
    [
        'name' => 'Галерея',
        'href' => '/gallery.php',
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