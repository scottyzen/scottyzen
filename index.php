<?php

/*
Theme Name: Scottyzen
Theme URI: http://scottyzen.com/blog
Description: Theme for scottyzen.com blog
Author: Scott Kennedy
Aurtor URI: http://scottyzen.com
Version: 0.1
*/

get_header();
?>

  <section id="about-me">
    <div class="container">
      <div class="row center-xs">
          <?php
          if (have_posts()) :
            while(have_posts()) : the_post();
            ?>
              <div class="col-xs-12 col-sm-10 col-md-8 articles">

                <!-- Title -->
                <h2 class="title"> <a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a> </h2>

                <!-- Date -->
                <small class="published-date"> <?php the_time(get_option('date_format')); ?> </small>

                <!-- Content -->
                <p> <?php the_content(); ?> </p>

                <!-- Tags -->
                <p class="tags"><?php the_tags(); ?></p>

              </div>
            <?php
            endwhile;
          endif;
          ?>
      </div>
    </div>
  </section>

<?php
get_footer();
?>
