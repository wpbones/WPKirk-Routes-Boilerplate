<?php

namespace WPKirk\Http\Controllers\Dashboard;

use WPKirk\Http\Controllers\Controller;

if (!defined('ABSPATH')) {
  exit();
}

class DashboardController extends Controller
{
  public function index()
  {
    return WPKirk()
    ->view('dashboard.index')
    ->withAdminStyle('prism')
    ->withAdminScript('prism')
    ->withAdminStyle('wp-kirk-common');
  }

  public function second()
  {
    return WPKirk()
    ->view('dashboard.second')
    ->withAdminStyle('prism')
    ->withAdminScript('prism')
    ->withAdminStyle('wp-kirk-common');
  }
}
