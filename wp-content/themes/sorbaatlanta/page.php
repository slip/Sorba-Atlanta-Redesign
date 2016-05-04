<?php get_header(); ?>

  <div class="hero-trails">
    <div class="hero-inner">
      <a href="/index.php" class="hero-logo"><img src="/assets/img/sorba_logo.svg" alt="Sorba Logo"></a>
    </div>
  </div>
  <!--end hero-->

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="container">
      <div class="inner-container">
        <h1 class="the-title"><?php the_title(); ?></h1>
        <p>
          <?php the_content(); ?>
        </p>
      </div>
    </div>
    <?php endwhile; else : ?>
      <p>
        <?php _e( 'Sorry, no pages found.' ); ?>
      </p>
      <?php endif; ?>

        <?php get_footer(); ?>