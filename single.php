<?php
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

                <!-- Check if back button is needed -->
                <?php if (wp_get_referer()) :?>
                  <a class="btn-light" href="/blog/"><i class="fa fa-arrow-left" aria-hidden="true"></i> Go Back</a>
                <?php endif; ?>

                <h1 class="title"> <a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a> </h1>
                <p> <?php the_content(); ?> </p>
              </div>
            <?php
            endwhile;
          endif;
          ?>
      </div>
      <div class="row center-xs">
        <div class="col-xs-12 col-sm-10 col-md-8 articles">
          <?php comments_template(); ?>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
?>
