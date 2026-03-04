<?php
function my_theme_scripts()
{
    // CSS
    wp_enqueue_style('main-style', get_stylesheet_uri());

    // JS
    wp_enqueue_script(
        'main-js', // handle
        get_template_directory_uri() . '/script.js', // path
        array(), // dependencies
        '1.0', // version
        true // load in footer
    );
}
add_action('wp_enqueue_scripts', 'my_theme_scripts');
