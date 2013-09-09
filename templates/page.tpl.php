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
  <div class="header-inner">
    <a id="logo" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">Sawyer Brown</a>
    <?php print render($page['header']); ?>
    <?php if ($is_front): ?><span class="band"></span><?php endif; ?>
  </div><!--header-inner-->
</header>

<div class="page">
  <div class="page-inner">
    <div role="main" id="main-content">
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>

      <?php print $breadcrumb; ?>

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

    <?php if ($page['sidebar']): ?>
      <div class="sidebar">
        <?php print render($page['sidebar']); ?>
      </div>
    <?php endif; ?>
  </div>
</div><!-- /page-->

<footer role="contentinfo">
  <div class="footer-inner">
    <?php print render($page['footer']); ?>
  </div>
</footer>

