<!-- Blog Post -->
<div class="card mb-4">
        <div class="card-body">
          <a href="<?PHP the_permalink()?>">
            <h2 class="card-title"> <?PHP the_title()?>  </h2>
          </a>
            <p class="card-text"><?PHP the_excerpt(  )?></p>
            <a href="<?PHP the_permalink()?>" class="btn btn-primary grdclass ">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
          <i class="fa fa-calendar3"></i>
           <?php echo get_the_date();?> 
        </div>
</div>