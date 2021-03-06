<?php
function register_nav(){

	register_nav_menus(
		array(
			'header' => 'Header'
		)
	);


		register_nav_menus(
		array(
			'footer' => 'Footer'
		)
	);


		register_nav_menus(
		array(
			'404' => '404'
		)
	);	
}
//if situation declaration line end:, normal line end;
if (! function_exists('setup')):
	function setup(){
		register_nav();		
		add_theme_support('post-tumbnails');
		add_image_size('team', 475, 475, array('center', 'center'));

	}	
endif;

function scripts_header(){
	wp_enqueue_style('init', get_stylesheet_uri());
}

function scripts_footer(){
	//wp_enqueue_style('init, get_template_directory_url().'/js/init.js', array('jquery'));
}

add_action('affter_setup_theme', 'setup');
add_action('wp_enqueue_scripts', 'scripts_header');
//add_action('wp_footer', 'scripts_footer');