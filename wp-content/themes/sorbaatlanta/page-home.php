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
  

<div class="container">
  <div class="cards">
    <?php
$args = array( 'posts_per_page' => 3, 'order'=> 'DSC', 'orderby' => 'date' );
$postslist = get_posts( $args );
foreach ( $postslist as $post ) :
  setup_postdata( $post ); ?> 
  <div class="card">
    <div class="card-image"><img src="<?php if (has_post_thumbnail()) {the_post_thumbnail_url();} ?>" alt=""></div>
    <div class="card-header"><h6><?php the_title(); ?></h6></div>
    <div class="card-copy"><?php the_excerpt(); ?></div>
  </div>
<?php
endforeach; 
wp_reset_postdata();
?>
  </div>
</div>



<?php get_footer(); ?>