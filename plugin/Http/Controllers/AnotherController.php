<?php

namespace WPKirk\Http\Controllers;

use WPKirk\Http\Controllers\Controller;

if (!defined('ABSPATH')) {
  exit();
}

class AnotherController extends Controller
{
  public function index()
  {
    return WPKirk()->view('another-view');
  }
}
