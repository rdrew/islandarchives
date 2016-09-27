<div<?php print $attributes; ?>>
<!--bourbon refills header-->
<header class="navigation" role="banner">
  <div class="navigation-wrapper">
    <!--<a href="javascript:void(0)" class="logo">-->
      <!--<img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_square.png" alt="Logo Image">-->
    <!--</a>-->

        <?php if ($logo): ?>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="logo site-branding__logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
        <?php endif; ?>

	<a href="javascript:void(0)" class="navigation-menu-button" id="js-mobile-menu">MENU</a>
    <nav role="navigation">
      <ul id="js-navigation-menu" class="navigation-menu show">
        <li class="nav-link"><a href="javascript:void(0)">Home</a></li>
        <li class="nav-link"><a href="javascript:void(0)">About Us</a></li>
        <li class="nav-link"><a href="javascript:void(0)">Contact</a></li>
        <li id="js-navigation-more" class="nav-link more"><a href="javascript:void(0)">More</a>
          <ul class="submenu">
            <li><a href="javascript:void(0)">Submenu Item</a></li>
            <li><a href="javascript:void(0)">Another Item</a></li>
            <li class="more"><a href="javascript:void(0)">Item with submenu</a>
              <ul class="submenu">
                <li><a href="javascript:void(0)">Sub-submenu Item</a></li>
                <li><a href="javascript:void(0)">Another Item</a></li>
              </ul>
            </li>
            <li class="more"><a href="javascript:void(0)">Another submenu</a>
              <ul class="submenu">
                <li><a href="javascript:void(0)">Sub-submenu</a></li>
                <li><a href="javascript:void(0)">An Item</a></li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <div class="navigation-tools">
      <div class="search-bar">
        <form role="search">
          <input type="search" placeholder="Enter Search" />
          <button type="submit">
            <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/search-icon.png" alt="Search Icon">
          </button>
        </form>
      </div>
    </div>
  </div>
</header>

<!--end of pasted header-->
  <header class="l-header" role="banner">
    <div class="l-constrained">
      <div class="l-branding site-branding">

<!--        <?php if ($logo): ?>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="site-branding__logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
        <?php endif; ?>
-->
        <?php if ($site_name): ?>
          <a href="<?php print $front_page; ?>" class="site-branding__name" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
        <?php endif; ?>
        <?php if ($site_slogan): ?>
          <h2 class="site-branding__slogan"><?php print $site_slogan; ?></h2>
        <?php endif; ?>
        <?php print render($page['branding']); ?>
      </div>
      <?php print render($page['navigation']); ?>
      <?php print render($page['header']); ?>
    </div>
  </header>

  <?php print render($page['hero']); ?>

  <?php if (!empty($page['highlighted'])): ?>
    <div class="l-highlighted-wrapper">
      <?php print render($page['highlighted']); ?>
    </div>
  <?php endif; ?>

  <div class="l-main l-constrained">
    <a id="main-content"></a>
    <?php print render($tabs); ?>
    <?php print $breadcrumb; ?>
    <?php print $messages; ?>
    <?php print render($page['help']); ?>

    <div class="l-content" role="main">
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </div>

    <?php print render($page['sidebar_first']); ?>
    <?php print render($page['sidebar_second']); ?>
  </div>

  <footer class="l-footer-wrapper" role="contentinfo">
    <?php print render($page['footer']); ?>
  </footer>
</div>


<!--<div class="wrapper-for-content-outside-of-footer">
   Uncomment this whole section for a sticky footer. The content of the page should be inside of this .wrapper-for-content-outside-of-footer
</div>-->

<footer class="footer-2" role="contentinfo">
  <div class="footer-logo">


        <?php if ($logo): ?>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="site-branding__logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
        <?php endif; ?>

  </div>
    <ul>
      <li><a href="javascript:void(0)">About</a></li>
      <li><a href="javascript:void(0)">Contact</a></li>
      <li><a href="javascript:void(0)">Products</a></li>
    </ul>

    <div class="footer-secondary-links">
      <ul>
        <li><a href="javascript:void(0)">Terms and Conditions</a></li>
        <li><a href="javascript:void(0)">Privacy Policy</a></li>
      </ul>

      <ul class="footer-social">
        <li><a href="javascript:void(0)">
          <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/facebook-logo-circle.png" alt="Facebook">
          </a></li>
        <li><a href="javascript:void(0)">
          <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/twitter-logo-circle.png" alt="Twitter">
        </a></li>
        <li><a href="javascript:void(0)">
          <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/youtube-logo-circle.png" alt="YouTube">
        </a></li>
      </ul>
    </div>
</footer>
