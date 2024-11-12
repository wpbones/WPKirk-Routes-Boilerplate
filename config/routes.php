<?php

if (!defined('ABSPATH')) {
  exit();
}

/*
|--------------------------------------------------------------------------
| Custom page routes
|--------------------------------------------------------------------------
|
| Here is where you can register all page routes for your custom view.
| Then you will use $plugin->getPageUrl( 'custom_page' ) to get the URL.
|
*/

return [
  'custom_page' => [
    'title'      => __('Title of the Page', 'wp-kirk'),
    'capability' => 'read',
    'route'      => [
      'get' => 'CustomPageController@customPage'
    ]
  ]
];
