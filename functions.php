<?php

namespace FourteenForty;

function setup()
{
    add_theme_support('align-wide');
}

function styles()
{
    wp_dequeue_style('wp-block-library');
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('after_setup_theme', 'FourteenForty\\setup', 10, 0);
add_action('wp_enqueue_scripts', 'FourteenForty\\styles', 10, 0);
