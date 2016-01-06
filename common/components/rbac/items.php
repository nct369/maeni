<?php
return [
    'dashboard' => [
        'type' => 2,
        'description' => 'Admin panel',
    ],
    'user' => [
        'type' => 1,
        'description' => 'İstifadəçi',
        'ruleName' => 'userRole',
    ],
    'moder' => [
        'type' => 1,
        'description' => 'Şirkət',
        'ruleName' => 'userRole',
        'children' => [
            'user',
        ],
    ],
    'admin' => [
        'type' => 1,
        'description' => 'Admin',
        'ruleName' => 'userRole',
        'children' => [
            'moder',
            'dashboard',
        ],
    ],
];
