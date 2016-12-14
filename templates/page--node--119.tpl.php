<div class="landingpage_new">
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







































</div>
