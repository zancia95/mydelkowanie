<?php

/********************************************************************************************
REJESTRACJA MENU
									

*********************************************************************************************/


function register_my_menus() {
	register_nav_menus(array(
	'topmenu' => __('Menu w topie'),
    'extra_menu' => __( 'Extra Menu' )
	));
	
}
add_action( 'init', 'register_my_menus' );


/********************************************************************************************

									WCZYTYWANIE SKRYPTÓW I ARKUSZY

*********************************************************************************************/




function load_styles_and_scripts() {

  //wczytywanie CSS
  wp_enqueue_style (
    'bootstrap-styles',
    'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css'
  );

  $style_mod = date('Y.m.d.H.i.s', filectime(__DIR__.'/style.css'));

  wp_enqueue_style (
    'nowy_v1',
    get_template_directory_uri() . '/style.css', 
    [],$style_mod
  );

 
  
  // wczytywanie JS


wp_enqueue_script (
    'bootstrap-scripts',
    'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js',
    true
  );
}

add_action('wp_enqueue_scripts', 'load_styles_and_scripts');

/********************************************************************************************

									OBRAZKI WYRÓŻNIAJĄCE

*********************************************************************************************/

add_theme_support( 'post-thumbnails');	

/********************************************************************************************

									REJESTRACJA WIGETÓW

*********************************************************************************************/


function smashing_register_sidebars(){
	register_sidebar();
	register_sidebar(array('id' => 'lid1', 'name' => 'obszar na wyszukiwarkę','before_widget' => '<span>', 'after_widget' => '</span>'));
	register_sidebar(array('id' => 'lid2', 'name' => 'tekst w stopce','before_widget' => '<span>', 'after_widget' => '</span>'));
	register_sidebar(array('id' => 'lid3', 'name' => 'trzecie tekstowe na strone główną','before_widget' => '<span>', 'after_widget' => '</span>'));
	register_sidebar(array('id' => 'produkty', 'name' => 'Menu produktowe', 'before_widget' => '<h1>', 'after_widget' => '</h1>'));
	register_sidebar(array('id' => 'Facebook', 'name' => 'Ikona Facebook'));
	}
add_action('widgets_init', 'smashing_register_sidebars');

?>