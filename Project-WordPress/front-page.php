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
