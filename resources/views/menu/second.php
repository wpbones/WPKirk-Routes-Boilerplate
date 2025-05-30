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
      <?php wpkirk_md(__('This Second menu view is defined in `/config/menus.php`, like the first one.', 'wp-kirk')); ?>
    </p>

    <?php wpkirk_code('@/config/menus.php', ['line-numbers' => true, 'line' => '46']); ?>

    <?php wpkirk_section(__('Controller', 'wp-kirk')); ?>

    <?php wpkirk_code('@/plugin/Http/Controllers/MenuRouting/MenuRoutingController.php', ['line-numbers' => true, 'line' => '25']); ?>

    <?php wpkirk_section(__('The View', 'wp-kirk')); ?>

    <?php wpkirk_code('@/resources/views/menu/second.php'); ?>

  </div>

  <?php wpkirk_toc('Menu Routes') ?>

</div>