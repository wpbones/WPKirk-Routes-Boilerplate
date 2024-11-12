<?php

namespace WPKirk\Http\Controllers;

use WPKirk\Http\Controllers\Controller;

if (!defined('ABSPATH')) {
  exit();
}

class CustomPageController extends Controller
{
  public function customPage()
  {
    return WPKirk()
    ->view('custom-page')
    ->withAdminStyle('prism')
    ->withAdminScript('prism')
    ->withAdminStyle('wp-kirk-common');
  }
}
