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
        'name' => 'Отзывы',
        'href' => '/reviews.php',
        'children' => [],
    ],
    [
        'name' => 'Калькулятор',
        'href' => '/calc.php',
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