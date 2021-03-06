
<div<?php print $attributes; ?>>


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

  <div class="hero">
    <div class="hero-content">
    <?php print render($page['content']); ?>
    </div>
  </div>

  <?php print $messages; ?>
<!--collection grid tiles-->
<!--
  <div class="grid grid-items-lines">
    <a href="javascript:void(0)" rel="one" class="collection-tile grid-item">
    <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_square.png" alt="">
    <h1>Grid Item</h1>
    <p>Lorem ipsum dolor sit amet, elit. Rem, illum.</p>
    </a>
    <a href="javascript:void(0)" rel="two" class="collection-tile grid-item">
    <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_square.png" alt="">
    <h1>Another Item</h1>
    <p>Lorem ipsum consectetur dolor sit amet, consectetur adipisicing elit.</p>
    </a>
    <a href="javascript:void(0)" rel="three" class="collection-tile grid-item">
    <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_square.png" alt="">
    <h1>Another Grid Item</h1>
    <p>Lorem ipsum dolor sit amet, elit.</p>
    </a>
    <a href="javascript:void(0)" rel="four" class="collection-tile grid-item">
    <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_square.png" alt="">
    <h1>Grid Item</h1>
    <p>Lorem ipsum dolor sit amet, elit. Rem, illum.</p>
    </a>
    <a href="javascript:void(0)" rel="five" class="collection-tile grid-item">
    <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_square.png" alt="">
    <h1>Wider Grid Item</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, illum.</p>
    </a>
    <a href="javascript:void(0)" rel="six" class="collection-tile grid-item">
    <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_square.png" alt="">
    <h1>A Grid Item</h1>
    <p>Lorem ipsum dolor sit amet, elit. Rem, illum.</p>
    </a>
    <div class="right-cover"></div>
    <div class="bottom-cover"></div>
  </div>
-->
<!--end of the tiles-->
<!--collection slides-->


<!--begin views embed-->

<?php print views_embed_view('landing_page_grid', 'collection_grid'); ?>
<?php print views_embed_view('landing_page_grid', 'collection_slides'); ?>

<!--end views embed-->


  <footer class="l-footer-wrapper" role="contentinfo">
  <?php print render($page['footer']); ?>
  </footer>
</div>
