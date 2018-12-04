<?php
if(!route(1))
{
    $route[1] = 'index';
}
if(!file_exists(admin_controller(route(1))))
{
    $route[1] = 'index';
}

$menus = [
    'index' => [
            'title' => 'Homepage',
            'icon' => 'tachometer'
    ],
    'users' => [
            'title' => 'Users',
            'icon' => 'user',
            'submenu' => [
                    'add-user' => 'Add User',
                    'users' =>  'All Users'
            ]
    ],

    'settings' => [
            'title' => 'Settings',
            'icon' => 'cogs'
    ]
];

require admin_controller( route(1) );