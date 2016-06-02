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
          <a
            class="twitter-timeline"
            data-dnt="true"
            href="https://twitter.com/SORBAAtlanta"
            data-widget-id="734785219702718464"
            data-link-color="#2866fa"
            data-chrome="noheader nofooter noborders noscrollbar transparent"
            data-tweet-limit="1"></a>
          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>
      </div>
    </div>
  </div><!--end hero-->


<div class="container">
  <div class="cards">
    <?php
$args = array('posts_per_page' => 3, 'order' => 'DSC', 'orderby' => 'date');
$postslist = get_posts($args);
foreach ($postslist as $post) :
  setup_postdata($post); ?>
  <div class="card">
    <div class="card-image"><a href="<?php the_permalink() ?>"><img src="<?php if (has_post_thumbnail()) {
    the_post_thumbnail_url();
} ?>" alt=""></a></div>
    <div class="card-header"><h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4></div>
    <div class="card-copy"><?php the_excerpt(); ?></div>
  </div>
  <?php
  endforeach;
  wp_reset_postdata();
  ?>
  </div>
</div>



<?php get_footer(); ?>
