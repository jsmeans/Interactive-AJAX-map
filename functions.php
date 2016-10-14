<?php

function theme_styles(){

wp_enqueue_style( 'normalize' ,  get_template_directory_uri() . '/css/normalize.css');
wp_enqueue_style( 'main' ,  get_template_directory_uri() . '/style.css');
}

function theme_js(){

	wp_enqueue_script('theme_js' ,  get_template_directory_uri() . '/js/theme.js' , array('jquery'), '', true );
	wp_enqueue_script('jquery_js' ,  get_template_directory_uri() . '/js/jquery-1.10.2.min.js' , array('jquery'), '', true );
	wp_enqueue_script('jqueryui' ,"http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js", array('jquery'), '', true );
}

add_action('wp_enqueue_scripts', 'theme_js');

add_action ( 'wp_enqueue_scripts', 'theme_styles');


function main_nav()
{
    wp_nav_menu(
    array(
        'theme_location'  => 'header-menu',
        'menu'            => '',
        'container'       => 'div',
        'container_class' => 'menu-{menu slug}-container',
        'container_id'    => '',
        'menu_class'      => 'menu',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul>%3$s</ul>',
        'depth'           => 0,
        'walker'          => ''
        )
    );
}

function register_html5_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu', 'main_nav'),
        'footer-menu' => __('Footer Menu', 'main_nav') // Main Navigation
    ));
}

add_action('init', 'register_html5_menu'); // Add HTML5 Blank Menu

//Enable custom menus

add_theme_support('menus');
add_theme_support('post-thumbnails');

//Create Widgets if needed


Function create_widget( $name, $id, $description){
$args = array(
	'name'          => __( $name),
	'id'            => $id,
	'description'   => $description,
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h5>',
	'after_title'   => '</h5>' 
); 

register_sidebar( $args );

}


create_widget('Left Footer', "footer_left", "Displays in the bottom left of footer");
create_widget('Middle Footer', "footer_middle", "Displays in the bottom middle of footer");
create_widget('Right Footer', "footer_right", "Displays in the bottom right of footer");
?>