<?php get_header(); ?>

  <div class="hero">
    <div class="hero-inner">
      <a href="/index.php" class="hero-logo"><img src="/assets/img/sorba_logo.svg" alt="Sorba Logo"></a>
      <div class="container">
        <div class="trail-status">
          <h4>Trail Status</h4>
          <p>All trails are open for bikes. Go Ride! <img src="/assets/img/trailOpen.png" alt="Trail Open"></p>
        </div>
      </div>
    </div>
  </div>
  <!--end hero-->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="container">
  <h1><?php the_title(); ?></h1>
  <p><?php the_content(); ?></p>
</div>
<?php endwhile; else : ?>
  <p>
    <?php _e( 'Sorry, no pages found.' ); ?>
  </p>
<?php endif; ?>

<?php get_footer(); ?>