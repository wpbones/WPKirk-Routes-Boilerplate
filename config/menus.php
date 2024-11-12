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
    "page_title" => "WP Kirk Routes",
    "menu_title" => "WP Kirk Routes",
    'capability' => 'read',
    'icon' => 'wpbones-logo-menu.png',
    'items' => [
      [
        "page_title" => __('Main View', 'wp-kirk'),
        "menu_title" => __('Main View', 'wp-kirk'),
        'capability' => 'read',
        'route' => [
          'get' => 'Dashboard\DashboardController@index'
        ],
      ],
      // Here we're using a key to get the URL later
      'second_view' => [
        "page_title" => __('Second View', 'wp-kirk'),
        "menu_title" => __('Second View', 'wp-kirk'),
        'capability' => 'read',
        'route' => [
          'get' => 'Dashboard\DashboardController@second'
        ],
      ],
      [
        "page_title" => __('Another View', 'wp-kirk'),
        "menu_title" => __('Another View', 'wp-kirk'),
        'capability' => 'read',
        'route' => [
          'get' => 'AnotherController@index'
        ],
      ],
    ]
  ]
];
