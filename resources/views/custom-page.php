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

    <?php wpkirk_code('@/config/routes.php'); ?>

    <?php wpkirk_section(__('Controller', 'wp-kirk')); ?>

    <?php wpkirk_code('@/plugin/Http/Controllers/CustomPageController.php'); ?>

    <?php wpkirk_section(__('The View', 'wp-kirk')); ?>

    <?php wpkirk_code('@/resources/views/custom-page.php'); ?>

    <?php wpkirk_section(__('Back to another view', 'wp-kirk')); ?>

    <?php wpkirk_code(
      htmlentities('<a href="<?php echo $plugin->getMenuUrl(\'second_view\'); ?>">Go to the second view</a>'),
    ); ?>

    <a href="<?php echo $plugin->getMenuUrl('second_view'); ?>">Go to the second view</a>
  </div>

  <?php wpkirk_toc('Custom Pages') ?>

</div>