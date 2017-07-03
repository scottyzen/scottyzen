<?php

/*
Theme Name: Scottyzen
Theme URI: http://localhost:8888/wordpress
Description: Theme for scottyzen.com blog
Author: Scott Kennedy
Aurtor URI: http://scottyzen.com
Version: 0.1
*/

get_header();


  ?>
  <div class="container">
    <div class="row">
  <?php
  if (have_posts()) :
    while(have_posts()) : the_post();
    ?>
      <div class="col-xs-12 col-sm-12 col-md-6">
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
