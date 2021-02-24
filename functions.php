<?php

define("ASSETS", get_template_directory_uri()."/assets");

require "includes/settings.php";

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('style', get_template_directory_uri().'/assets/css/style.css');

    wp_enqueue_script('script', get_template_directory_uri().'/assets/js/app.js', [], '1.0.0', true);
    
});

