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

    <?php wpkirk_section(__('Configuration Pages', 'wp-kirk')); ?>

    <p>
      <?php wpkirk_md(__('You may define your own pages also by using the `pages` folder. Create a new class extending the `Page` class.', 'wp-kirk')); ?>
    </p>

    <?php wpkirk_code('@/pages/MyCustomPage.php', ['line-numbers' => true, 'line' => '5']); ?>

    <p>
      <?php wpkirk_md(__('The class name is not important. You can use any name you want. The most important thing is the name of the file. In this case, the file name is `MyCustomPage.php`. This means that the slug of the page will be the string lowercase of the filename: `mycustompage`.', 'wp-kirk')); ?>
    </p>


    <?php wpkirk_section(__('Get the route Url', 'wp-kirk')); ?>

    <p>
      <?php wpkirk_md(__('Now you can get the Url of this page/route by using the `getPageUrl` method. By using the key defined in the route configuration.', 'wp-kirk')); ?>
    </p>

    <?php wpkirk_code(
      htmlentities('<a href="<?php echo $plugin->getPageUrl(\'mycustompage\'); ?>">Go to custom page</a>')
    ); ?>

    <a href="<?php echo $plugin->getPageUrl('mycustompage'); ?>">Go to MyCustomPage</a>

  </div>

  <?php wpkirk_toc('Pages Folder') ?>

</div>