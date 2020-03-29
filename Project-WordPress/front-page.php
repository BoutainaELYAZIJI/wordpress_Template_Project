<<<<<<< HEAD
<?php get_header(); ?>


<!-- Slideshow container -->

<div class="slideshow-container">

  \ESTSBTemplate\Project-WordPress\img

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="/interfaceWP/wp-content/themes/ESTSBTemplate/Project-WordPress/img/bg_1.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="/interfaceWP/wp-content/themes/ESTSBTemplate/Project-WordPress/img/bg_2.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="/interfaceWP/wp-content/themes/ESTSBTemplate/Project-WordPress/img/bg_3.jpg" style="width:100%">
</div>
<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>
<!-- The dots/circles -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div></div>

</header>
=======
<!-- Info Section  -->
<?php $hero=get_field('main_information');?>  
<div class="w3-container w3-light-grey " style="padding:128px 16px">
  <div class="w3-row-padding ">
    <div class="w3-col m6">
      <h3><?php echo $hero['title'];?></h3>
      <p><?php echo $hero['text'];?></p>
      <p><a href="#team" class="w3-button w3-black"><i class="fa fa-users"> </i> <?php echo $hero['link_text'];?></a></p>
    </div>
    <div class="w3-col m6 w3-center">
      <img class="w3-image w3-round-large " src="<?php echo $hero['image'];?>" alt="Buildings" width="400" height="500">
    </div>
  </div>
</div>
<!-- end info Section -->

<!-- About Section -->
<div class="services-section">
      <div class="inner-width">
        <h1 class="section-title">What we offer</h1>
        <div class="border"></div>
        <div class="services-container">

          <div class="service-box">
            <div class="service-icon">
              <i class="fas fa-school"></i>
            </div>
            <div class="service-title">Safety First</div>
            <div class="service-desc">
               write here the description.
            </div>
          </div>

          <div class="service-box">
            <div class="service-icon">
              <i class="fas fa-chalkboard-teacher"></i>
            </div>
            <div class="service-title">Regular Classes</div>
            <div class="service-desc">
               write here the description.
            </div>
          </div>

          <div class="service-box">
            <div class="service-icon">
              <i class="fas fa-chalkboard-teacher"></i>
            </div>
            <div class="service-title">Certified Teachers</div>
            <div class="service-desc">
               write here the description.
            </div>
          </div>

          <div class="service-box">
            <div class="service-icon">
              <i class="fas fa-chalkboard"></i>
            </div>
            <div class="service-title">Sufficient Classrooms</div>
            <div class="service-desc">
               write here the description..
            </div>
          </div>

          <div class="service-box">
            <div class="service-icon">
              <i class="fas fa-book-open"></i>
            </div>
            <div class="service-title">Creative Lessons</div>
            <div class="service-desc">
              write here the description.
            </div>
          </div>

          <div class="service-box">
            <div class="service-icon">
              <i class="fas fa-theater-masks"></i>
            </div>
            <div class="service-title">clubs & sports</div>
            <div class="service-desc">
              write here the description.
            </div>
          </div>
        </div>
      </div>
    </div>
</div>


<!--administration Section -->
<?php if( have_rows('prof') ): ?>
  <?php $hero=get_field('proffeseur');?> 
  <div class="w3-container " style="padding:128px 16px" id="team">
  <h1 class="section-title-1 "><?php echo $hero['titre'];?></h1>
  <div class="border"></div>
  <p class="w3-center w3-large"><?php echo $hero['sous_titre'];?></p>
  <div class="w3-row-padding" style="margin-top:64px">
  <?php while( have_rows('prof') ): the_row(); 
 
           // vars
            $image = get_sub_field('img');
            $content = get_sub_field('name');
            $link = get_sub_field('branche');
            $det = get_sub_field('detaille');
             ?>
    <div class="w3-col l3 m6 w3-margin-bottom" >
      <div class="w3-card">
        <img src="<?php echo $image?>"  style="width:100% ;height: 308px;" class="w3-hover-opacity" >
        <div class="w3-container" >
         <div class="w3-container" style="width:295px ; height:250px;">
          <h3><?php echo $content;?></h3>
          <p class="w3-opacity"><?php echo $link;?></p>
          <p><?php echo $det;?></p>
         </div>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
      </div><?php endwhile;?>
    </div>  
</div>
</div> 
</div>
</div>
<?php endif;?> 
<!--end administration Section-->

<!-- Promo Section "Statistics" --> 
<div class="containers">
  <img src="/interfaceWP/wp-content/themes/ESTSBTemplate/Project-WordPress/img/course-5.jpg" alt="Notebook" style="width:100%; height:500px;">
  <div class="content">
     <h1 class="section-title-1">Ecole supérieure de technologie Sidi Bennour</h1>
    <p>Un établissement public d’enseignement supérieur à finalité de formation 
des Techniciens Supérieurs.Elle a été créée en Août 2016 par le Ministère de l’Enseignement Supérieur,
 de la Formation des Cadres et de la Recherche Scientifique du Royaume du Maroc.L’Ecole Supérieure de 
Technologie Sidi Bennour (ESTSB) est une composante de l’Université Chouaib Doukkali d’El Jadida. 
Sa vocation est de former des Techniciens Supérieurs polyvalents, hautement qualifiés et immédiatement
 opérationnels après leur sortie de l’Ecole en tant que collaborateurs d’ingénieurs et de managers.</p>
<div class="w3-container w3-row w3-center w3-black w3-padding-64">
  <div class="w3-quarter">
    <span class="w3-xxlarge">+30</span>
    <br>Enseignants certifiés
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">+1000</span>
    <br>Etudiants
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">+50</span>
    <br>cours
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">+200</span>
    <br>Projets
  </div>
</div>
</div>
</div>

<!-- Activité Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="work">
 <h1 class="section-title-1">Activitées</h1>
        <div class="border"></div>
  <p class="w3-center w3-large">Quelque Activité Fait par Les étudiants de Notre école</p>
  <?php if( have_rows('event') ): ?>
  <div class="w3-row-padding"> 
  <?php while( have_rows('event') ): the_row(); 
           // vars
            $image = get_sub_field('img');
            $content = get_sub_field('ev');
            $link = get_sub_field('de');
            $det = get_sub_field('date');
             ?>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="<?php echo $image?>" alt="Norway" style="width:300px ; height:200px;" class="w3-hover-opacity">
      <div class="w3-container w3-white" style="height:300px;width:300px ;">
        <p class="w3-center"><b><?php echo $content;?></b></p>
        <p class="w3-opacity w3-center"><?php echo $det;?></p>
        <p><?php echo $link;?></p>
      </div>
    </div> <?php endwhile;?>
  </div>
  <?php endif;?>
 


<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Skills Section -->
<div class="w3-container  w3-padding-64">
  <div class="w3-row-padding">  
  <h1 class="section-title-1">Article</h1>
        <div class="border"></div>
	<section id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		  <!-- Posts-->
                  <div class="w3-row">
                  <?php
    $args = array(
        'post_type' => 'post',
        'orderby' => 'ID',
        'post_status' => 'publish',
        'order' => 'DESC',
        'posts_per_page' => -1 
    );
    $result = new WP_Query($args);
    if ($result->have_posts()) : ?>
    <?php while ($result->have_posts()) :
    $result->the_post(); get_template_part( '/partials/post/content','excerpt');?>
                  
                    <?php  endwhile;endif;?>
                  </div><!-- #posts end -->

                  <!-- Pagination
                  ============================================= -->
                  <div class="row mb-3">
                      <div class="col-12">

                      <div class="btn btn-style pull-left"><?php next_posts_link( '« Older Posts' ); ?></div>
<div class="btn btn-style pull-right"><?php previous_posts_link( 'Newer Posts »' ); ?></div>

                      </div>
                      
                  </div>
                  <!-- .pager end -->

              </div><!-- .postcontent end -->

		</div>
	</section>
</div>

    
  </div>
</div>
<!-- Container (Contact Section) -->
<div class="w3-container w3-light-grey " style="padding:128px 16px" id="contact">
  <h1 class="section-title-1">Contact</h1>
        <div class="border"></div>
  <p class="w3-center w3-large">Envoyer vote opinion  dans un message</p>
  <div class="row">
    <div class="col-sm-5 ">
      <p><span class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></span>Jabrane khalile Jabrane  avenue 24 el jadida</p>
      <p><span class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></span> +212 5 22 44 77 88 95</p>
      <p><span class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"></span>contact_estsb@mail.com</p>
    </div>
    <div class="col-sm-7 ">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="w3-input  w3-border" id="name" name="name" placeholder="Nom" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="w3-input w3-border" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="w3-input w3-border" id="comments" name="comments" placeholder="Commetaire" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
        <button class="w3-button w3-black pull-right" type="submit">
          <i class="fa fa-paper-plane"></i>
                  Envoyer  </button>
        </div>
      </div>
    </div>
    <div class="row w3-center">
     <?php $hero=get_field('map');?>  
     <?php echo $hero['map'];?>
    </div>
</div></div>
<br>
<?php get_footer(); ?>

