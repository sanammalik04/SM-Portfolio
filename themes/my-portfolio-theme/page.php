<?php
get_header();

while(have_posts()) {
    the_post(); ?>
    
    <div class="page-banner">
      <div class="page-banner__bg-image"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title(); ?></h1>
        <div class="page-banner__intro">
        </div>
      </div>
    </div>




      <!-- <div class="page-links"> -->
        <!-- <h2 class="page-links__title"><a href='<?php echo site_url('/about-me') ?>'>About Me</a></h2> -->
        <!-- <ul class="min-list">
          <li class="current_page_item"><a href="#">Our History</a></li>
          <li><a href="#">Our Goals</a></li>
        </ul> -->
      <!-- </div> -->
      
      <div>
        <div class="generic-content">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
<?php }
 get_footer();
?>
