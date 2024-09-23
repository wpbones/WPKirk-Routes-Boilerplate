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

  <h2>The controller</h2>

  <pre>
    class DashboardController extends Controller
    {
      public function second()
      {
        return WPKirk()->view('dashboard.second');
      }
    }
  </pre>
</div>