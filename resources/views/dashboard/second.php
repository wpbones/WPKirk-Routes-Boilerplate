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

    <?php wpkirk_section(__('Controller', 'wp-kirk')); ?>

    <?php wpkirk_code('@/plugin/Http/Controllers/Dashboard/DashboardController.php'); ?>

    <?php wpkirk_section(__('The View', 'wp-kirk')); ?>

    <?php wpkirk_code('@/resources/views/dashboard/second.php'); ?>

  </div>

  <?php wpkirk_toc('Routes') ?>

</div>