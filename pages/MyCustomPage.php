<?php

use WPKirk\WPBones\Routing\Pages\Support\Page;

class MyCustomPage extends Page
{
  public function title(): string
  {
    return __('Hello, Custom Page in pages folder!', 'wp-kirk');
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
