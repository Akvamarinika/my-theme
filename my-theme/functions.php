<?php



/* Подключение стилей и скриптов */
function my_func_load_style_scripts() {
	wp_enqueue_style( 'site-style', get_stylesheet_uri(). '/style.css'); 
	wp_enqueue_script( 'site-navigation', get_template_directory_uri() . '/js/main.js');	
}

add_action( 'wp_enqueue_scripts', 'my_func_load_style_scripts' );

register_nav_menu('menu-1', 'меню');

/* ACF: страница с опциями */
if( function_exists('acf_add_options_page') ) {

acf_add_options_page(array(
   'page_title' => 'Основные настройки',
   'menu_title' => 'Настройки сайта',
   'menu_slug' => 'theme-general-settings',
   'capability' => 'edit_posts',
   'redirect' => false
));

}

































?>