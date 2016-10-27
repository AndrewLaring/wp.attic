<?php

function cadem_jquery_script()
{
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-1.8.3.min.js');
    wp_enqueue_script('jquery');
}

function cadem_functions_script()
{
    wp_register_script('cadem_functions', get_template_directory_uri() . '/js/functions.js');
    wp_enqueue_script('cadem_functions');
}

function cadem_flexslider_script()
{
    wp_register_script('cadem_functions', get_template_directory_uri() . '/js/jquery.flexslider.js');
    wp_enqueue_script('cadem_functions');
    wp_enqueue_style('cadem_flexslider', get_template_directory_uri() . '/css/flexslider.css');
}

function cadem_isotope_script()
{
    wp_register_script('cadem_functions', get_template_directory_uri() . '/js/jquery.isotope.min.js');
    wp_enqueue_script('cadem_functions');
}

function cadem_bootstrap_script()
{
    wp_register_script('cadem_bootstrap_script', get_template_directory_uri() . '/js/bootstrap.min.js');
    wp_enqueue_script('cadem_functions');
}

add_action('wp_enqueue_scripts', 'cadem_jquery_script');
add_action('wp_enqueue_scripts', 'cadem_flexslider_script');
add_action('wp_enqueue_scripts', 'cadem_isotope_script');
add_action('wp_enqueue_scripts', 'cadem_functions_script');
add_action('wp_enqueue_scripts', 'cadem_bootstrap_script');

//function cadem_flexslider_style()
//{
//    wp_enqueue_style('cadem_flexslider', get_template_directory_uri() . '/css/flexslider.css');
//}
//
//
//add_action('wp_enqueue_scripts', 'cadem_bootstrap_script');