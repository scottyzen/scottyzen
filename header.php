
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo("name"); ?></title>
  <?php wp_head(); ?>
</head>
  <body <?php body_class(); ?>>

    <div class="container">

      <header>
        <h1> <a href="<?php echo home_url(); ?>"> <?php bloginfo("name"); ?> </a></h1>
        <h5> <?php bloginfo("decription"); ?> </h5>
      </header>
