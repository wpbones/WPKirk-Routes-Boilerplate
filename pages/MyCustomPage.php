<?php

use WPKirk\WPBones\Routing\Pages\Support\Page;

class MyCustomPage extends Page
{
  public function title(): string
  {
    return __('Hello, Custom Page in pages folder!', 'wp-kirk');
  }

  // Who can open the page. Without this method it asks for `read`: any logged-in user.
  public function capability(): string
  {
    return 'manage_options';
  }

  public function render()
  {
    return $this->plugin
      ->view('pages.my-custom-page')
      ->withAdminStyle('prism')
      ->withAdminScript('prism')
      ->withAdminStyle('wp-kirk-common');
  }
}
