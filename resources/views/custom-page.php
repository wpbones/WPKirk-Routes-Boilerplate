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
  <h2>Custom Page</h2>
  <p>In the <code>config/routes.php</code> file, you can add a custom page route like this:</p>

  <pre>
    return [
      'custom_page' => [
        'title'      => 'Title of page',
        'capability' => 'read',
        'route'      => [
          'get' => 'CustomPageController@customPage'
        ]
      ]
    ];
  </pre>

  <p>Then you can create a controller like this:</p>

  <pre>
    class CustomPageController extends Controller
    {
      public function customPage()
      {
        return WPKirk()->view('custom-page');
      }
    }
  </pre>

  <h2>Back to the Second menu</h2>
  <a href="<?php echo $plugin->getMenuUrl('second_view'); ?>">Go to the Second view in the menu</a>

  <pre>
    $plugin->getMenuUrl('second_view')
  </pre>
</div>