<!--
 |
 | In $plugin you'll find an instance of Plugin class.
 | If you'd like can pass variable to this view, for example:
 |
 | return PluginClassName()->view( 'dashboard.index', [ 'var' => 'value' ] );
 |
-->

<div class="wp-kirk wrap">
  <h1><?php echo $plugin->Name; ?> boilerplate main view</h1>

  <h2>The menu configuration</h2>
  <pre>
    return [
      'wp_kirk_slug_menu' => [
        "page_title" => "WP Kirk Page",
        "menu_title" => "WP Kirk Menu",
        'capability' => 'read',
        'icon' => 'wpbones-logo-menu.png',
        'items' => [
          [
            "page_title" => "Main View",
            "menu_title" => "Main View",
            'capability' => 'read',
            'route' => [
              'get' => 'Dashboard\DashboardController@index'
            ],
          ],
          // Here we're using a key to get the URL later
          'second_view' => [
            "page_title" => "Second View",
            "menu_title" => "Second View",
            'capability' => 'read',
            'route' => [
              'get' => 'Dashboard\DashboardController@second'
            ],
          ],
          [
            "page_title" => "Another Controller",
            "menu_title" => "Another Controller",
            'capability' => 'read',
            'route' => [
              'get' => 'AnotherController@index'
            ],
          ],
        ]
      ]
    ];
  </pre>

  <p>As you can see we used a key for the second view, so we can get the URL later.</p>
  <p>By using <code>$plugin->getMenuUrl('second_view');</code> you can get the URL for the second view.</p>

  <h2>The controller</h2>

  <pre>
    class DashboardController extends Controller
    {
      public function index()
      {
        return WPKirk()->view('dashboard.index');
      }
    }
  </pre>

  <h2>Custom Page</h2>
  <a href="<?php echo $plugin->getPageUrl('custom_page'); ?>">Go to custom page</a>

  <pre>
    $plugin->getPageUrl( 'custom_page');
  </pre>
</div>