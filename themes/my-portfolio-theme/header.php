<!DOCTYPE html>
<html>

<head>
    <?php wp_head(); ?>
</head>

<body>
<header class="site-header">
      <div class="container">
        <h1 class="school-logo-text float-left">
          <a href="#"><strong>Sanam Malik's</strong>Portfolio</a>
        </h1>
        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
          <nav class="main-navigation">
            <ul>
              <li><a href='<?php echo site_url('/about-me') ?>'>About Me</a></li>
              <li><a href='<?php echo site_url('/projects') ?>'>Projects</a></li>
              <li><a href=<?php echo site_url('/contact-me')?>'>Contact Me</a></li>
            </ul>
          </nav>
          <div class="site-header__util">
            <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
          </div>
        </div>
      </div>
    </header>