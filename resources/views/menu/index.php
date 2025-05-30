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

    <p>
      <?php wpkirk_md(__('To display and handle the WordPress menu in the left sidebar, you need to create a menu item in the `/config/menus.php`.', 'wp-kirk')); ?>
    </p>

    <?php wpkirk_code('@/config/menus.php', ['line-numbers' => true, 'line' => '29']); ?>

    <?php wpkirk_section(__('Controller', 'wp-kirk')); ?>

    <?php wpkirk_code('@/plugin/Http/Controllers/MenuRouting/MenuRoutingController.php', ['line-numbers' => true, 'line' => '16']); ?>

    <?php wpkirk_section(__('This view', 'wp-kirk')); ?>

    <?php wpkirk_code('@/resources/views/menu/index.php'); ?>

    <?php wpkirk_section(__('Get Menu Url', 'wp-kirk')); ?>

    <p>
      <?php wpkirk_md(__('You may get a menu url by using a key in the `/config/menus.php`.', 'wp-kirk')); ?>
    </p>

    <?php wpkirk_code('@/config/menus.php', ['line-numbers' => true, 'line' => '41']); ?>

    <p>
      <?php wpkirk_md(__('As you can see we used `second_view` as key for the second view, so we can get the URL later.', 'wp-kirk')); ?>
    </p>

    <p><?php _e('By using', 'wp-kirk'); ?></p>

    <?php wpkirk_code("\$plugin->getMenuUrl('second_view');") ?>

    <?php wpkirk_code(
      htmlentities('<a href="<?php echo $plugin->getMenuUrl(\'second_view\'); ?>">Go to the second view</a>')
    ); ?>

    <a href="<?php echo $plugin->getMenuUrl('second_view'); ?>">Go to the second view</a>

  </div>

  <?php wpkirk_toc('Menu Routes') ?>

</div>