<?php
//Load Stylesheets
function load_css()
{


		wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all' );
		wp_enqueue_style('bootstrap');


		//wp_register_style('magnific', get_template_directory_uri() . '/css/magnific-popup.css', array(), false, 'all' );
		//wp_enqueue_style('magnific');


		wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all' );
		wp_enqueue_style('main');


	
}
add_action('wp_enqueue_scripts','load_css');



// Load Javascript
function load_js()
{	
		wp_enqueue_script('jquery');

		wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
		wp_enqueue_script('bootstrap');

		//wp_register_script('magnific', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', 'jquery', false, true);
		//wp_enqueue_script('magnific');
        wp_register_script('range', get_template_directory_uri() . '/js/html5range.js', 'jquery', false, true);
		wp_enqueue_script('range');

		wp_register_script('custom', get_template_directory_uri() . '/js/custom.js', 'jquery', false, true);
		wp_enqueue_script('custom');

}
add_action('wp_enqueue_scripts', 'load_js');
