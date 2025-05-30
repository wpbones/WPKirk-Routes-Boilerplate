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
  'my_custom_page_route' => [
    'title'      => __('Title of the Page', 'wp-kirk'),
    'capability' => 'read',
    'route'      => [
      'get' => 'Routes\RoutesController@myRoute'
    ]
  ]
];
