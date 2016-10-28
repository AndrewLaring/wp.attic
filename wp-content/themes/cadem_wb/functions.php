<?php

function cadem_jquery_script()
{
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-1.8.3.min.js');
    wp_enqueue_script('jquery');
}

function cadem_functions_script()
{
    wp_register_script('cadem_functions', get_template_directory_uri() . '/js/functions.js', array('jquery'));
    wp_enqueue_script('cadem_functions');
}

function cadem_flexslider_script()
{
    wp_register_script('cadem_flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js');
    wp_enqueue_script('cadem_flexslider');
}

function cadem_isotope_script()
{
    wp_register_script('cadem_isotope', get_template_directory_uri() . '/js/jquery.isotope.min.js', array('jquery'));
    wp_enqueue_script('cadem_isotope');
}

function cadem_bootstrap_script()
{
    wp_register_script('cadem_bootstrap_script', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'));
    wp_enqueue_script('cadem_bootstrap_script');
}

add_action('wp_enqueue_scripts', 'cadem_jquery_script');
add_action('wp_enqueue_scripts', 'cadem_bootstrap_script');
add_action('wp_enqueue_scripts', 'cadem_flexslider_script');
add_action('wp_enqueue_scripts', 'cadem_isotope_script');
add_action('wp_enqueue_scripts', 'cadem_functions_script');

if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}

function register_cadem_sidebar()
{

    /* В боковой колонке - первый сайдбар */
    register_sidebar(
        array(
            'id' => 'cadem_sidebar', // уникальный id
            'name' => 'cadem_sidebar', // название сайдбара
            'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.', // описание
            'before_widget' => '', // по умолчанию виджеты выводятся <li>-списком
            'after_widget' => '',
            'before_title' => '<h3 class="widget-title">', // по умолчанию заголовки виджетов в <h2>
            'after_title' => '</h3>'
        )
    );
}

add_action('widgets_init', 'register_cadem_sidebar');


function wp_pagenavi()
{
    global $wp_query;
    $pages = '';
    $max = $wp_query->max_num_pages;
    if (!$current = get_query_var('paged')) $current = 1;
    $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
    $a['total'] = $max;
    $a['current'] = $current;

    $total = 1; //1 - выводить текст "Страница N из N", 0 - не выводить
    $a['mid_size'] = 3; //сколько ссылок показывать слева и справа от текущей
    $a['end_size'] = 1; //сколько ссылок показывать в начале и в конце
    $a['prev_text'] = '&laquo;'; //текст ссылки "Предыдущая страница"
    $a['next_text'] = '&raquo;'; //текст ссылки "Следующая страница"

    if ($max > 1) echo '<div class="navigation">';
    if ($total == 1 && $max > 1) $pages = '<span class="pages">Страница ' . $current . ' из ' . $max . '</span>' . "\r\n";
    echo $pages . paginate_links($a);
    if ($max > 1) echo '</div>';
}