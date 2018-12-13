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
            'icon' => 'tachometer',
            'permissions' => [
                    'show' => 'View',

            ]
    ],
    'users' => [
            'title' => 'Users',
            'icon' => 'user',
            'permissions' => [
                'show' => 'View',
                'edit' => 'Edit',
                'delete' => 'Delete'
            ]
    ],

    'menu' => [
            'title' => 'Menu Management',
            'icon' => 'bars',
            'permissions' => [
                'show' => 'View',
                'add' => 'Add',
                'edit' => 'Edit',
                'delete' => 'Delete'
            ]
    ],
    'contact' => [
            'title' => 'Inbox',
            'icon' => 'envelope',
            'permissions' => [
                'show' => 'View',
                'send' => 'Send',
                'edit' => 'Edit',
                'delete' => 'Delete'
            ]
    ],
    'settings' => [
        'title' => 'Settings',
        'icon' => 'cogs',
        'permissions' => [
            'show' => 'View',
            'edit' => 'Edit'
        ]
    ]
];

require admin_controller( route(1) );