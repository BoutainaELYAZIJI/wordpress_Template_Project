
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
    <?php  if (have_posts()):   while (have_posts()) : the_post(); ?>
    <div class="w3-card-4 w3-margin w3-white">
     <div class="w3-container">
      <h3><b><?php the_title(); ?></b></h3>
      <h5> Ecrit par <?php echo get_the_author() ?> le <span class="w3-opacity"><?php echo get_the_date();?></span></h5>
     </div>
     <div class="w3-row-padding" >
      <p><?php the_content(); ?></p>
       <div class="w3-row">
       <div class="w3-col m8 s12">
          <p><h3 class=" w3-padding-large w3-white "><b></b></h3></p>
        </div>
        <div class="w3-col m4 w3-hide-small" >
          <p><span class="w3-padding-large w3-right"><b>Comments  </b> <span class="w3-tag">0</span></span></p>
        </div>
      </div>
     </div>
    </div>
    <?php  endwhile;endif;  ?>
    <hr>
  </div>
  <?php get_sidebar();?>
</div>
</div>
<?php get_footer();?>
