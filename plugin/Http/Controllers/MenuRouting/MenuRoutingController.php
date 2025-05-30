<?php

namespace WPKirk\Http\Controllers\MenuRouting;

use WPKirk\Http\Controllers\Controller;

if (!defined('ABSPATH')) {
  exit();
}

class MenuRoutingController extends Controller
{
  public function index()
  {
    return WPKirk()
      ->view('menu.index')
      ->withAdminStyle('prism')
      ->withAdminScript('prism')
      ->withAdminStyle('wp-kirk-common');
  }

  public function second()
  {
    return WPKirk()
      ->view('menu.second')
      ->withAdminStyle('prism')
      ->withAdminScript('prism')
      ->withAdminStyle('wp-kirk-common');
  }

  public function routes()
  {
    return WPKirk()
      ->view('menu.routes')
      ->withAdminStyle('prism')
      ->withAdminScript('prism')
      ->withAdminStyle('wp-kirk-common');
  }

  public function pages()
  {
    return WPKirk()
      ->view('menu.pages')
      ->withAdminStyle('prism')
      ->withAdminScript('prism')
      ->withAdminStyle('wp-kirk-common');
  }
}
