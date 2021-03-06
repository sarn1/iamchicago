<?php

//nav menus
$navmenus = array(
	'Main Menu'
);


//enable theme features
add_theme_support('menus'); //enable menus
add_theme_support('post-thumbnails'); //enable post thumbnails
add_theme_support( 'title-tag' ); //enable title
 

//register nav menus

add_action('init','jet4_register_nav_menus');
function jet4_register_nav_menus() {
  global $navmenus;
  if (function_exists('register_nav_menus')) {
	$navmenus_proc = array();
	foreach($navmenus as $menu) {
		$key = sanitize_title($menu);
		$val = $menu;
		$navmenus_proc[$key] = $val;
	}
	register_nav_menus($navmenus_proc);
  }
}

//register theme script

add_action('init','jet4_register_theme_script');
function jet4_register_theme_script() {
  if ( !is_admin() ) {
	wp_register_script('jet4_theme_script',	get_bloginfo('template_directory') . '/includes/scripts.min.js',	array('jquery'));
	wp_enqueue_script('jet4_theme_script');

  }
}


add_action( 'wp_enqueue_scripts', 'prefix_add_my_stylesheet' );
function prefix_add_my_stylesheet() {

  wp_register_style( 's452-style', get_bloginfo('template_directory').'/style.css' , __FILE__ );
  wp_enqueue_style( 's452-style' );

}