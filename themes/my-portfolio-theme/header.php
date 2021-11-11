<!DOCTYPE html>
<html>

<head>
    <?php wp_head(); ?>
</head>

<body>
<header class="site-header">
      <div class="container">
        <h1 class="portfolio-name">
          <!-- <a href="<?php echo site_url() ?>"><strong>Sanam Malik</strong></a> -->
          <strong>Sanam Malik</strong>
        </h1>
        <img class="my-image"></img>
        <!-- <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span> -->
        <i class="site-header__menu-trigger"></i>
        <div class="site-header__menu group">
          <nav class="main-navigation">
            <h3></h3><a href='<?php echo site_url('/projects') ?>'>Projects</a><h3></h3>
            <h3></h3><a href='<?php echo site_url('/publications') ?>'>Publications</a><h3></h3>
            <h3></h3><a href='<?php echo site_url('/contact-me') ?>'>Contact Me</a><h3></h3>
          </nav>
        </div>
      </div>
    </header>