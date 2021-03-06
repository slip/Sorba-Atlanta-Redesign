<?php get_header(); ?>

<div class="hero-trails">
  <div class="hero-inner">
    <a href="/index.php" class="hero-logo"><img src="/assets/img/sorba_logo.svg" alt="Sorba Logo">
    </a>
  </div>
</div>
<!--end hero-->

<div class="container">
  <div class="blog-post">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
    <article>
      <div class="title-and-share">
        <h1><?php the_title(); ?></h1>
        <div id="share-icon">
          <ul class="share-menu">
            <li class="share-menu-item">
              <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.sorbaatlanta.com&t=" title="Share on Facebook" target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&t=' + encodeURIComponent(document.URL)); return false;"><img src="/assets/img/facebook-square.svg">
              </a>
            </li>
            <li class="share-menu-item">
              <a href="https://twitter.com/intent/tweet?source=http%3A%2F%2Fwww.sorbaatlanta.com&text=:%20http%3A%2F%2Fwww.sorbaatlanta.com" target="_blank" title="Tweet" onclick="window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent(document.title) + ':%20'  + encodeURIComponent(document.URL)); return false;"><img src="/assets/img/twitter.svg">
              </a>
            </li>
            <li class="share-menu-item">
              <a href="https://plus.google.com/share?url=http%3A%2F%2Fwww.sorbaatlanta.com" target="_blank" title="Share on Google+" onclick="window.open('https://plus.google.com/share?url=' + encodeURIComponent(document.URL)); return false;"><img src="/assets/img/googleplus-square.svg">
              </a>
            </li>
          </ul>
        </div>        
      </div>
      <ul class="post-meta">
        <li class="author">by
          <?php the_author_posts_link(); ?>
        </li>
        <li class="cat">in
          <?php the_category( ','); ?>
        </li>
        <li class="date">on
          <?php the_time( 'F j, Y'); ?>
        </li>
      </ul>
      
      <?php if (get_the_post_thumbnail()): ?>
      <?php the_post_thumbnail( 'full'); ?>
      <?php endif; ?>
      <?php the_content(); ?>
    <!--      End Blog Post-->
    </article>
    <?php endwhile; else: ?>
    <p>
      <?php _e( 'Sorry, no posts matched your criteria.'); ?>
    </p>
    <?php endif; ?>
  </div>
</div>
<?php get_footer(); ?>