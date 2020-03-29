<?php get_header();?>
<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1400px">
<!-- Header -->
<header class="w3-container w3-center w3-padding-32"> 
  <h1><b></b></h1>
</header>
<!-- Grid -->
<div class="w3-row">
  <!-- Blog entries -->
  <div class="w3-col l8 s12">
       <!-- Blog entry -->
       <?php if ( have_posts() ) : ?>
			<header class="page-header">
				<h1 class="page-title">
				<?php
				/* translators: %s: Search query. */
				printf( __( 'Search Results for: %s', 'twentythirteen' ), get_search_query() );
				?>
				</h1>
			</header>
			<?php
			// Start the loop.
			while ( have_posts() ) :
				the_post();
				?>
				<?php get_template_part( '/partials/post/content','excerpt');?>
			<?php endwhile; ?>
			<?php twentythirteen_paging_nav(); ?>
		<?php else : ?>
			<?php get_template_part( '/partials/post/content', 'none' ); ?>
		<?php endif; ?>
    <hr>
  </div>
  <?php get_sidebar();?>
</div>
</div>
<?php get_footer();?>
