<div class="landingpage_new">

  <body>

    <header id="navbar" class="l-header navbar navbar-fixed-top" role="banner">

      <div class="container">
        <div class="logo_block">
          <?php if ($logo): ?>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="site-branding__logo">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
          </a>
          <?php endif; ?>

          <?php if ($site_name): ?>
          <a href="<?php print $front_page; ?>" class="site-branding__name" title="<?php print t('Home'); ?>" rel="home">
            <span><?php print $site_name; ?></span>
          </a>
          <?php endif; ?>
          <?php if ($site_slogan): ?>
          <h2 class="site-branding__slogan"><?php print $site_slogan; ?></h2>
          <?php endif; ?>
        </div>

        <?php print render($page['navigation']); ?>

      </div>
    </header>

    <div class="hero">
      <div class="hero-content">
        <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_square.png" alt="Logo Image" class="hero-logo">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni modi doloremque excepturi laudantium maxime explicabo cumque deleniti voluptate deserunt.</p>
      </div>
    </div>
    <div class="grid-items-lines">
      <a href="javascript:void(0)" class="grid-item">
        <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_square.png" alt="">
        <h1>Grid Item</h1>
        <p>Lorem ipsum dolor sit amet, elit. Rem, illum.</p>
      </a>
      <a href="javascript:void(0)" class="grid-item">
        <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_square.png" alt="">
        <h1>Another Item</h1>
        <p>Lorem ipsum consectetur dolor sit amet, consectetur adipisicing elit.</p>
      </a>
      <a href="javascript:void(0)" class="grid-item">
        <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_square.png" alt="">
        <h1>Another Grid Item</h1>
        <p>Lorem ipsum dolor sit amet, elit.</p>
      </a>
      <a href="javascript:void(0)" class="grid-item">
        <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_square.png" alt="">
        <h1>Grid Item</h1>
        <p>Lorem ipsum dolor sit amet, elit. Rem, illum.</p>
      </a>
      <a href="javascript:void(0)" class="grid-item grid-item-big">
        <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_square.png" alt="">
        <h1>Wider Grid Item</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, illum.</p>
      </a>
      <a href="javascript:void(0)" class="grid-item">
        <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_square.png" alt="">
        <h1>A Grid Item</h1>
        <p>Lorem ipsum dolor sit amet, elit. Rem, illum.</p>
      </a>
      <a href="javascript:void(0)" class="grid-item">
        <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_square.png" alt="">
        <h1>Item</h1>
        <p>Lorem ipsum dolor sit amet, elit. Rem, illum.</p>
      </a>
      <a href="javascript:void(0)" class="grid-item">
        <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_square.png" alt="">
        <h1>Last Grid Item</h1>
        <p>Lorem ipsum dolor sit amet, elit. Rem, illum.</p>
      </a>
      <div class="right-cover"></div>
      <div class="bottom-cover"></div>
    </div>
  </body>
</div>
