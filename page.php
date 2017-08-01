<?php
get_header();


  ?>
  <div class="container">
    <div class="row">
  <?php
  if (have_posts()) :
    while(have_posts()) : the_post();
    ?>
      <div class="col-xs-12 post">
        <h2> <a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a> </h2>
        <p> <?php the_content(); ?> </p>
      </div>
    <?php
    endwhile;
  endif;
  ?>
    </div>
  </div>
  <?php


get_footer();
?>
