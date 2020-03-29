<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 */

get_header(); ?>

<div id="primary" class="site-content">
  <div id="content" role="main">

    <article id="post-0" class="post error404 no-results not-found">
      <header class="entry-header">
        <h1 class="entry-title"><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'twentytwelve' ); ?></h1>
      </header>

      <div class="entry-content">
        <?php dynamic_sidebar( '404' ); ?>
      </div><!-- .entry-content -->
    </article><!-- #post-0 -->

  </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>
