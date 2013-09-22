<?php
//kpr(get_defined_vars());
//kpr($theme_hook_suggestions);
//template naming
//page--[CONTENT TYPE].tpl.php
?>
<?php if( theme_get_setting('mothership_poorthemers_helper') ){ ?>
<!-- page.tpl.php-->
<?php } ?>

<?php print $mothership_poorthemers_helper; ?>

<header role="banner">
  <div id="header-inner">
    <a id="logo" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">Sawyer Brown</a>
    <?php print render($page['header']); ?>
    <?php if ($is_front): ?><span id="band"></span><?php endif; ?>
  </div><!--header-inner-->
</header>

<div id="page" <?php if ($page['sidebar']): ?>class="with-sidebar"<?php endif; ?>>
  <div id="page-inner">
    <?php if (!$is_front): ?><div id="main-wrap"><?php endif; ?>
      <?php print render($title_prefix); ?>
        <?php if ($title): ?>
          <h1><?php print $title; ?></h1>
        <?php endif; ?>
      <?php print render($title_suffix); ?>
      <div role="main" id="main-content">

        <?php if ($action_links): ?>
          <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>

        <?php if (isset($tabs['#primary'][0]) || isset($tabs['#secondary'][0])): ?>
          <nav class="tabs"><?php print render($tabs); ?></nav>
        <?php endif; ?>

        <?php if($page['highlighted'] OR $messages){ ?>
          <div class="drupal-messages">
          <?php print render($page['highlighted']); ?>
          <?php print $messages; ?>
          </div>
        <?php } ?>


        <?php print render($page['content_pre']); ?>

        <?php print render($page['content']); ?>

        <?php print render($page['content_post']); ?>

      </div><!-- /main-->
    <?php if (!$is_front): ?></div><!--main-wrap--><?php endif; ?>

    <?php if ($page['sidebar']): ?>
      <div id="sidebar">
        <?php print render($page['sidebar']); ?>
      </div>
    <?php endif; ?>
  </div><!--page-inner-->
</div><!-- /page-->

<?php if ($page['post_content']): ?>
  <div id="post-content">
    <div id="post-inner">
      <?php print render($page['post_content']); ?>
    </div><!--post-inner-->
  </div><!--post-content-->
<?php endif; ?>

<footer role="contentinfo">
  <div id="footer-inner">
    <?php print render($page['footer']); ?>
    <p>All Material &copy;<?php print date('Y'); ?> Sawyer Brown | Powered by <a href="http://mcninteractive.com" target="_blank">MCN</a></p>
  </div>
</footer>

