<?php

function awesome_script_enqueue() {
    //Add js and css from assets
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/assets/css/awesome.css', [], '1.0.0', 'all');
    wp_enqueue_script('customjs', get_template_directory_uri() . 'assets/js/awesome.js', [], '1.0.0', true);
}

//Make wordpress call your function
add_action('wp_enqueue_scripts', 'awesome_script_enqueue');

function awesome_theme_setup() {
    //Add menus to wordpress
    add_theme_support('menus');

    //Add menu to menus panel programmaticly
    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('secondary', 'Footer Navigation');
}

// Call the function after the theme initialization is done
add_action('init', 'awesome_theme_setup');

?>