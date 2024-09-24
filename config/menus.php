<?php

if (!defined('ABSPATH')) {
  exit();
}

/*
|--------------------------------------------------------------------------
| Plugin Menus routes
|--------------------------------------------------------------------------
|
| Here is where you can register all the menu routes for a plugin.
| In this context, the route are the menu link.
|
*/

return [
  'wp_kirk_slug_menu' => [
    "page_title" => "WP Kirk Page",
    "menu_title" => "WP Kirk Menu",
    'capability' => 'read',
    'icon' => 'wpbones-logo-menu.png',
    'items' => [
      [
        "page_title" => "Main View",
        "menu_title" => "Main View",
        'capability' => 'read',
        'route' => [
          'get' => 'Dashboard\DashboardController@index'
        ],
      ],
      // Here we're using a key to get the URL later
      'second_view' => [
        "page_title" => "Second View",
        "menu_title" => "Second View",
        'capability' => 'read',
        'route' => [
          'get' => 'Dashboard\DashboardController@second'
        ],
      ],
      [
        "page_title" => "Another Controller",
        "menu_title" => "Another Controller",
        'capability' => 'read',
        'route' => [
          'get' => 'AnotherController@index'
        ],
      ],
    ]
  ]
];
