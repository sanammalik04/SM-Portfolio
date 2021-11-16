<!DOCTYPE html>
<html>

<head>
    <?php wp_head(); ?>
</head>

<body>
<header class="site-header">
  <i class="site-header__menu-trigger"></i>
  <div class="site-header__menu group">
    <nav class="main-navigation">
      
      <h3><a href='<?php echo site_url() ?>'>Home</a></h3>
      <h3><a href='<?php echo site_url('/publications') ?>'>Publications</a></h3>
      <h3><a href='<?php echo site_url('/projects') ?>'>Projects</a></h3>
      <h3><a href='<?php echo site_url('/about-me') ?>'>About Me</a></h3>  

    </nav>
  </div>
</div>
      
    </header>