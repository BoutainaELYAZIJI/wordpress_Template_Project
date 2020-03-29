<!-- Blog Post -->
<div class="card mb-4" style="margin-left: 20px;">
        <div class="card-body">
          <a href="<?PHP the_permalink()?>">
            <h2 class="card-title" style="color:#5bc0de;"> <?PHP the_title()?>  </h2>
          </a>
            <p class="card-text"><?PHP the_excerpt( )?></p>
            <a href="<?PHP the_permalink()?>" type="button" class="btn btn-info">Lire La suite &rarr;</a>
        </div>
        <div class="card-footer text-muted">
          <i class="fa fa-calendar"></i>
           <?php echo get_the_date();?> 
        </div>
        <div class="card-footer">
        <hr>
        </div>
      
</div>
