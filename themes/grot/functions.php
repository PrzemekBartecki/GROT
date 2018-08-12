<?php

add_theme_support('menus');
add_theme_support('post-thumbnails');

function custom_excerpt($length){
	return	20;
}
add_filter( 'excerpt_length', 'custom_excerpt', 999);


function project_enqueue_script() {
	wp_enqueue_script(
		'main',
		get_stylesheet_directory_uri() . '/js/main.js',
		['jquery'],
		true	);

	wp_enqueue_style(
        'main',
        get_stylesheet_directory_uri() . '/css/main.css',
        ['fontawesome','fonty'] );

	wp_enqueue_style(
		'fonty','https://fonts.googleapis.com/css?family=Bree+Serif|Open+Sans');

	wp_enqueue_style(
		'fontawesome','https://use.fontawesome.com/releases/v5.0.13/css/all.css');




}
add_action( 'wp_enqueue_scripts' , 'project_enqueue_script' );


	function	register_my_menus()	{
		register_nav_menus(
			array(
				'menu'	=>	'Top Menu',
				'projectmenu' => 'Project Menu'
			)
		);
	}
add_action('init','register_my_menus');


/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

