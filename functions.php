<?php

// $version=wp_get_theme()->get(' Version ');

function pourLeCss(){
    wp_enqueue_style('pourCss',get_template_directory_uri().'/style.css',array(),'1.0');
}

//on met true pour dire qu'on veut que cela apparaissnet dans le footer
function pourLeJs(){
    wp_enqueue_script('pourLeJs',get_template_directory_uri().'/assets/js/app.js', array(), '1.0' ,true);
}

function titreDuSite(){
    add_theme_support('title-tag');
}

function menus(){
    $locations=array(
        'primary'=>'Menu du haut',
        'footer=>"Menu du bas'
    );
}

add_action('wp_enqueue_scripts','pourLeCss');
add_action('wp_enqueue_scripts','pourLeJs');
add_action('after_setup_theme','titreDuSite');
add_action('init','menus');

