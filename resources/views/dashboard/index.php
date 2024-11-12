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

    <?php wpkirk_section(__('Configuration Menus', 'wp-kirk')); ?>

    <?php wpkirk_code('@/config/menus.php'); ?>

    <p><?php _e('As you can see we used a key for the second view, so we can get the URL later.', 'wp-kirk'); ?></p>
    <p><?php _e('By using', 'wp-kirk'); ?></p>

    <?php wpkirk_code("\$plugin->getMenuUrl('second_view');") ?>

    <p><?php _e('you can get the URL for the second view.', 'wp-kirk'); ?></p>

    <?php wpkirk_section(__('Controller', 'wp-kirk')); ?>

    <?php wpkirk_code('@/plugin/Http/Controllers/Dashboard/DashboardController.php'); ?>

    <?php wpkirk_section(__('Custom Page', 'wp-kirk')); ?>

    <?php wpkirk_code(
      htmlentities('<a href="<?php echo $plugin->getPageUrl(\'custom_page\'); ?>">Go to custom page</a>')
    ); ?>

    <a href="<?php echo $plugin->getPageUrl('custom_page'); ?>">Go to custom page</a>

  </div>

  <?php wpkirk_toc('Routes') ?>

</div>