<?php
if(!route(1))
{
    $route[1] = 'index';
}
if(!file_exists(admin_controller(route(1))))
{
    $route[1] = 'index';
}

if(!session('user_rank') || session('user_rank') == 3){
    $route[1] = 'login';
}

$menus = [
    'index' => [
            'title' => 'Homepage',
            'icon' => 'tachometer'
    ],
    'users' => [
            'title' => 'Users',
            'icon' => 'user'
    ],

    'menu' => [
            'title' => 'Menu Management',
            'icon' => 'bars'
    ],
    'settings' => [
        'title' => 'Settings',
        'icon' => 'cogs'
    ]
];

require admin_controller( route(1) );