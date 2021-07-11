<?php

/* Подключение стилей и скриптов */
function my_func_load_style_scripts() {

	//Регистрирую стили
   wp_register_style( 'my_reset', get_template_directory_uri() . '/base_setings/base_style.css', array(), null, 'all');
   wp_register_style( 'my_style', get_template_directory_uri() . '/style.css', array('my_reset'), null, 'all');

    // Подключаю стили
   wp_enqueue_style( 'my_reset');
   wp_enqueue_style( 'my_style');

    // Подключать стили/scripts сразу, без регистрации
    wp_enqueue_style( 'FontsConnect', get_template_directory_uri() . '/FontsConnect.css');
	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js',  array(), null, 'in_footer');
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'), null, 'in_footer');
	
	
	//шрифты
	wp_enqueue_style( 'font-1', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap', false, null); 
	
   if ( is_page(120) ) {
     wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick.css');
	 wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/js/slick.min.js', array(), null, 'in_footer');	
	 wp_enqueue_script( 'slider', get_template_directory_uri() . '/js/slider.js', array('jquery', 'slick-js'), null, 'in_footer');
	// wp_deregister_script( 'contact-js' );  
	wp_enqueue_script( 'contact-js', get_template_directory_uri() . '/js/contact.js', array(), null, 'in_footer');  
   	  //отключаем стили
     //wp_dequeue_style ( 'template' );
    }
	
	if ( is_page(108) ) {
     	wp_enqueue_style( 'tort', get_template_directory_uri() . '/css/tort.css', array(), null); 
		wp_enqueue_script( 'product', get_template_directory_uri() . '/js/product.js', array('jquery'), null, 'in_footer');	
    }
	
	if ( is_page(117) ) {
     	wp_enqueue_style( 'loyalty', get_template_directory_uri() . '/css/loyalty.css');
		wp_enqueue_script( 'loyalty-js', get_template_directory_uri() . '/js/loyalty.js', array('jquery'), null, 'in_footer');	
    }
	
	if ( is_page(111) ) {
     	wp_enqueue_style( 'contacts', get_template_directory_uri() . '/css/contacts.css', array('my_style'), null);
		//wp_deregister_script( 'contact-js' );  
		wp_enqueue_script( 'contact-js', get_template_directory_uri() . '/js/contact.js', array('jquery'), null, 'in_footer');
    }
	
	if ( is_page(114) ) {
     	wp_enqueue_style( 'menu', get_template_directory_uri() . '/css/menu.css', array('my_style'), null);
		wp_enqueue_script( 'menu-js', get_template_directory_uri() . '/js/menu.js', array('jquery'), null, 'in_footer');
    }
    
	if ( is_404() ) {
		wp_enqueue_style( '404', get_template_directory_uri() . '/css/404.css'); 
		wp_enqueue_style( 'font-1', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap', false, null); 
	}
	
}

add_action( 'wp_enqueue_scripts', 'my_func_load_style_scripts' );

//wp_enqueue_script( 'ymaps', '//api-maps.yandex.ru/2.1/?load=package.full&lang=ru-RU);

register_nav_menu('menu-1', 'меню');

/* registration menus */
function enqueue_menus() {
	$menus = array(
		'left_nav' => 'Левая часть меню', 
		'right_nav' => 'Правая часть меню'
	);

	register_nav_menus( $menus );
}
add_action('after_setup_theme', 'enqueue_menus');

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

//убрать вставку от wp_head margin-top: 32px !important;	
add_filter('show_admin_bar', '__return_false');

//яндекс-карта по API
function ya_api_myscript() {
    wp_enqueue_script( 'map1', 'https://api-maps.yandex.ru/2.1/?apikey=774d5bd8-84f8-48a5-9984-4786aed7a903&lang=ru_RU', null, true );
}
add_action( 'wp_enqueue_scripts', 'ya_api_myscript' );


function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Главная</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&gt;&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&gt;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&gt;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}



























?>