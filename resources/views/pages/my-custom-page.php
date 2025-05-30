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

    <?php wpkirk_section(__('Configure', 'wp-kirk')); ?>

    <p>
      <?php wpkirk_md(__('This page is configured using the `pages` folder. Create a new class extending the `Page` class.', 'wp-kirk')); ?>
    </p>

    <?php wpkirk_code('@/pages/MyCustomPage.php', ['line-numbers' => true, 'line' => '5']); ?>

    <?php wpkirk_section(__('Get the route Url', 'wp-kirk')); ?>

    <p>
      <?php wpkirk_md(__('Now you can get the Url of this page/route by using the `getPageUrl` method. By using the key defined in the route configuration.', 'wp-kirk')); ?>
    </p>

    <?php wpkirk_code(
      htmlentities('<a href="<?php echo $plugin->getPageUrl(\'mycustompage\'); ?>">Go to custom page</a>')
    ); ?>

  </div>

  <?php wpkirk_toc('My Custom Page') ?>

</div>