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
<<<<<<< b2c4d0c700418737022b329612391084ad789d30
>>>>>>> 13a740028a11589ccebe30cd478d15bed51cbcd7






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


=======
<!--administration Section -->
<?php if( have_rows('prof') ): ?>
  <?php $hero=get_field('proffeseur');?> 
  <div class="w3-container " style="padding:128px 16px" id="team">
  <h3 class="w3-center "><?php echo $hero['titre'];?></h3>
  <p class="w3-center w3-large"><?php echo $hero['sous_titre'];?></p>
  <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
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
>>>>>>> Administration
