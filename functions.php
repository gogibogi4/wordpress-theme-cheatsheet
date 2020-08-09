<?php

function awesome_script_enqueue() {
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/assets/css/awesome.css', [], '1.0.0', 'all');
    wp_enqueue_script('customjs', get_template_directory_uri() . 'assets/js/awesome.js', [], '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'awesome_script_enqueue');

?>