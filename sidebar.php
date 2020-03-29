<!-- Introduction menu -->
<div class="w3-col l4">
  <!-- About Card -->
  <div class="w3-card w3-margin w3-margin-top">
  <img src="/wordpress/wp-content/themes/estsb/img/images.jpeg" style="width:100%">
    <div class="w3-container w3-white">
      <h4><b>ESTSB</b></h4>
      <p> 
      L’Ecole Supérieure de Technologie Sidi Bennour (ESTSB) est un 
       public d’enseignement supérieur à finalité de formation des Techniciens 
       Supérieurs. Créée en Août 2016 par le Ministère de l’Enseignement Supérieur, 
       de la Formation des Cadres et de la Recherche Scientifique du Royaume du Maroc, 
      l’ESTSB est une composante de l’Université Chouaib Doukkali d’El Jadida. 
      </p>
    </div>
  </div><hr>
  <!-- Posts -->
  <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4>Articles</h4>
    </div>
    <ul class="w3-ul w3-hoverable w3-white">
     <?php   while (have_posts()) : the_post(); ?>
      <li class="w3-padding-16">
        <img src="/wordpress/wp-content/themes/estsb/img/cc.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large"><?php the_title();?></span><br>
        <span><?php echo get_the_date();?></span>
      </li> 
     <?php endwhile;?>
    </ul>
  </div>
  <hr> 
  <!-- Labels / tags -->
  <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4>Tags</h4>
    </div>
    <div class="w3-container w3-white">
    <p><span class="w3-tag w3-black w3-margin-bottom">News</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Commerce</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Maths</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Article</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Hakaton</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Java</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Technologies</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">PNL</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">PFE</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Mangements</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Clothing</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">PFA</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Agricultures</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Technique</span>
    </p>
    </div>
  </div>
<!-- END Introduction Menu -->
</div>
