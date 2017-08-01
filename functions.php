<?php

function scottyzen_resources(){
  // Theme Functions

  // Styles
  wp_enqueue_style('fontawsome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css');
  wp_enqueue_style('flexboxgrid', '//cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css');

  wp_enqueue_style('main', 'http://scottyzen.com/css/main.css');
    wp_enqueue_style( 'style',
        get_stylesheet_uri(),
        array('main')
    );

  // Javascript
  wp_enqueue_script('main', 'http://scottyzen.com/js/min/main-min.js');
}

add_action('wp_enqueue_scripts', 'scottyzen_resources');

?>
