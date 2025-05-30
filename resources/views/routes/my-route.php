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

    <?php wpkirk_section(__('Configuration', 'wp-kirk')); ?>

    <p>
      <?php wpkirk_md(__('This route has been configured in `/config/routes.php`. As you can see this view is not displayed in the left sidebar.', 'wp-kirk')); ?>
    </p>

    <?php wpkirk_code('@/config/routes.php', ['line-numbers' => true, 'line' => '22']); ?>

    <?php wpkirk_section(__('Controller', 'wp-kirk')); ?>
    <?php wpkirk_code('@/plugin/Http/Controllers/Routes/RoutesController.php', ['line-numbers' => true, 'line' => '16']); ?>


    <?php wpkirk_section(__('This view', 'wp-kirk')); ?>
    <?php wpkirk_code('@/resources/views/routes/my-route.php') ?>

  </div>

  <?php wpkirk_toc('My Route') ?>

</div>