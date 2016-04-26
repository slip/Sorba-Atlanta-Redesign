<?php

/*
Template Name: Home Page Template
*/
?>
  <?php get_header(); ?>

  <div class="hero">
    <div class="hero-inner">
      <a href="/index.php" class="hero-logo"><img src="/assets/img/sorba_logo.svg" alt="Sorba Logo"></a>
      <div class="container">
        <div class="trail-status">
          <h5>Trail Status</h5>
          <p>All trails are open for bikes. Go Ride! <img src="/assets/img/trailOpen.png" alt="Trail Open"></p>
        </div>
      </div>
    </div>
  </div><!--end hero-->
  

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="container">
     <div class="cards">
      <div class="card">
        <div class="card-image">
          <img src="http://1.bp.blogspot.com/-HcQcN17dp8g/VorjIN536nI/AAAAAAAAAc8/MxKBa-K2xFc/s1600/10959818_10153123225015879_2312531987606728620_n.jpg" alt="">
        </div>
        <div class="card-header">
          <h6><?php the_title(); ?></h6>
        </div>
        <div class="card-copy">
          <p><?php the_content() ?></p>
        </div>
      </div>
      
      <div class="card">
        <div class="card-image">
          <img src="http://1.bp.blogspot.com/-HcQcN17dp8g/VorjIN536nI/AAAAAAAAAc8/MxKBa-K2xFc/s1600/10959818_10153123225015879_2312531987606728620_n.jpg" alt="">
        </div>
        <div class="card-header">
          <h6><?php the_title(); ?></h6>
        </div>
        <div class="card-copy">
          <p><?php the_content() ?></p>
        </div>
      </div>
      
      <div class="card">
        <div class="card-image">
          <img src="http://1.bp.blogspot.com/-HcQcN17dp8g/VorjIN536nI/AAAAAAAAAc8/MxKBa-K2xFc/s1600/10959818_10153123225015879_2312531987606728620_n.jpg" alt="">
        </div>
        <div class="card-header">
          <h6><?php the_title(); ?></h6>
        </div>
        <div class="card-copy">
          <p><?php the_content() ?></p>
        </div>
      </div>
      </div> <!-- end cards -->
    </div> <!-- end container -->
    
    
<?php endwhile; else : ?>
  <p>
    <?php _e( 'Sorry, no pages found.' ); ?>
  </p>
<?php endif; ?>

<?php get_footer(); ?>