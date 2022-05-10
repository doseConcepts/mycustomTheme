<?php
// Theme Functions Go here
//
// funtion myFunction(){
//
//
// };
// myFunction();

function enqueue_my_styles_and_scripts(){

  wp_enqueue_style('my-styles', get_stylesheet_directory_uri() . '/css/portfoliocss.css', array(), '1.0.0', 'all');


  wp_enqueue_script('my-scripts', get_themefile_uri() . '/js/portfoliojs.js', array(''), '1.0.0', 'all');

}

add_action('wp_enqueue_scripts', 'enqueue_my_styles_and_scripts');
