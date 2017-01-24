<?php
//variables





?>
<header id="navbar" class="l-header header navbar navbar-fixed-top" role="banner">

    <div class="container">
      <div class="site-branding header__branding">
        <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__branding__logo__wrapper-link">
        <img class="header__branding__logo" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
        <?php endif; ?>

        <?php if ($site_name): ?>
        <a href="<?php print $front_page; ?>" class="header__branding__name__wrapper-link" title="<?php print t('Home'); ?>" rel="home">
        <h1 class="header__branding__name"><?php print $site_name; ?></h1>
        </a>
        <?php endif; ?>
        <?php if ($site_slogan): ?>
        <h2 class="header__branding__slogan"><?php print $site_slogan; ?></h2>
        <?php endif; ?>
      </div>
<div class="topnav header__menu">
<?php
$mainMenu = module_invoke('superfish', 'block_view', '1');
print render($mainMenu['content']);
?>
  </div>
  <div class="simpleSearch header__search">
<?php
$simpleSearch = module_invoke('islandora_solr', 'block_view', 'simple');
print render($simpleSearch['content']);
?>
  <?php print render($page['navigation']); ?>
</div>

    </div>
  </header>

<!--print hero region-->
<?php print render($page['hero']); ?>

<!--print highlighted region-->
<?php if (!empty($page['highlighted'])): ?>
<div class="l-highlighted-wrapper">
<?php print render($page['highlighted']); ?>
</div>
<?php endif; ?>

<!--main content-->
<div class="l-main l-constrained">
  <?php print $breadcrumb; ?>
  <a id="main-content"></a>

  <div class="l-content" role="main">
    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
      <h1 class="pageTitle"><?php print $title; ?></h1>
    <?php endif; ?>
      <?php print render($tabs); ?>
    <?php print render($title_suffix); ?>
    <?php print $messages; ?>
    <?php print render($page['help']); ?>


    <?php if ($action_links): ?>
      <ul class="action-links"><?php print render($action_links); ?></ul>
    <?php endif; ?>
    <?php print render($page['content']); ?>
    <?php print $feed_icons; ?>
  </div>

    <?php print render($page['sidebar_second']); ?>
    <?php print render($page['sidebar_first']); ?>
</div>

<footer class="l-footer-wrapper" role="contentinfo">
<?php print render($page['footer']); ?>
</footer>
