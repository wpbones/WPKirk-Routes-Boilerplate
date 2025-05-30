<?php

namespace WPKirk\Http\Controllers\Routes;

use WPKirk\Http\Controllers\Controller;

if (!defined('ABSPATH')) {
  exit();
}

class RoutesController extends Controller
{
  public function myRoute()
  {
    return WPKirk()
      ->view('routes.my-route')
      ->withAdminStyle('prism')
      ->withAdminScript('prism')
      ->withAdminStyle('wp-kirk-common');
  }
}
