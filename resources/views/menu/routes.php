<!--
 |
 | In $plugin you'll find an instance of Plugin class.
 | If you'd like can pass variable to this view, for example:
 |
 | return PluginClassName()->view( 'dashboard.index', [ 'var' => 'value' ] );
 |
-->

<?php ob_start() ?>

<div class="wp-kirk wrap wp-kirk-sample">

  <div class="wp-kirk-toc-content">

    <?php wpkirk_section(__('Configuration Routes', 'wp-kirk')); ?>

    <p>
      <?php wpkirk_md(__('Instead of using the Menu, you can also define your own routes in `/config/routes.php`. They works in a similar way as the Menu routes. But they won\'t be displayed in the menu.', 'wp-kirk')); ?>
    </p>

    <?php wpkirk_code('@/config/routes.php', ['line-numbers' => true, 'line' => '22']); ?>

    <?php wpkirk_section(__('Controller', 'wp-kirk')); ?>

    <?php wpkirk_code('@/plugin/Http/Controllers/Routes/RoutesController.php', ['line-numbers' => true, 'line' => '16']); ?>

    <?php wpkirk_section(__('Get the route Url', 'wp-kirk')); ?>

    <p>
      <?php wpkirk_md(__('Now you can get the Url of this page/route by using the `getPageUrl` method. By using the key defined in the route configuration.', 'wp-kirk')); ?>
    </p>

    <?php wpkirk_code(
      htmlentities('<a href="<?php echo $plugin->getPageUrl(\'my_custom_page_route\'); ?>">Go to custom page</a>')
    ); ?>

    <a href="<?php echo $plugin->getPageUrl('my_custom_page_route'); ?>">Go to custom page route</a>

  </div>

  <?php wpkirk_toc('Routes') ?>

</div>