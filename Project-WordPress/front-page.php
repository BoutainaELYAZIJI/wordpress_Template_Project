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
>>>>>>> 13a740028a11589ccebe30cd478d15bed51cbcd7
