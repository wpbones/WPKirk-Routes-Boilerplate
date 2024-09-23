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
    return WPKirk()->view('dashboard.index');
  }

  public function second()
  {
    return WPKirk()->view('dashboard.second');
  }
}
