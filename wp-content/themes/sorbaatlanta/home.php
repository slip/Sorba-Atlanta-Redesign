<?php get_header(); ?>

  <div class="hero-trails">
    <div class="hero-inner">
      <a href="/index.php" class="hero-logo"><img src="/assets/img/sorba_logo.svg" alt="Sorba Logo"></a>
    </div>
  </div>
  <!--end hero-->

  <div class="container">
    <div class="post-listing">
      <h1>Articles</h1>

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
          <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
          <ul class="post-meta">
            <li class="author">by
              <?php the_author_posts_link() ?>
            </li>
            <li class="cat">in
              <?php the_category(','); ?>
            </li>
            <li class="date">on
              <?php the_time('F j, Y'); ?>
            </li>
          </ul>
          <p>
            <?php if( get_the_post_thumbnail() ) : ?>
              <div class="thumbnail-container">
                <?php the_post_thumbnail('medium'); ?>
              </div>

              <?php echo strip_tags(get_the_excerpt()); ?>
          </p>
        </article>
        <?php endif; ?>
          <?php endwhile; else : ?>
            <p>
              <?php _e('Sorry, no posts matched your criteria.'); ?>
            </p>
            <?php endif; ?>
    </div>
  </div>
  <?php get_footer(); ?>