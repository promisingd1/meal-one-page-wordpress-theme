<?php
function meal_theme_setup() {
	load_theme_textdomain('meal', get_template_directory().'/languages');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('automatic-feed-links');
	add_theme_support('html5', array(
		'search-form',
		'comment-form',
		'gallery',
		'caption',
		'comment-list'
	));
	add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'meal_theme_setup');


function meal_assets() {

	wp_enqueue_style('google-font', '//fonts.googleapis.com/css?family=Playfair+Display:300,400,700,800|Open+Sans:300,400,700');
	wp_enqueue_style ('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.css');
	wp_enqueue_style ('animate', get_template_directory_uri().'/assets/css/animate.css');
	wp_enqueue_style ('owl-carousel', get_template_directory_uri().'/assets/css/owl.carousel.min.css');
	wp_enqueue_style ('magnific-popup', get_template_directory_uri().'/assets/css/magnific-popup.css');
	wp_enqueue_style ('aos', get_template_directory_uri().'/assets/css/aos.css');
	wp_enqueue_style ('bootstrap-datepicker', get_template_directory_uri().'/assets/css/bootstrap-datepicker.css');
	wp_enqueue_style ('jquery-timepicker', get_template_directory_uri().'/assets/css/jquery.timepicker.css');
	wp_enqueue_style ('portfolio', get_template_directory_uri().'/assets/css/portfolio.css');
	wp_enqueue_style ('ionicons', get_template_directory_uri().'/assets/fonts/ionicons/css/style.css');
	wp_enqueue_style ('fontawesome', get_template_directory_uri().'/assets/fonts/fontawesome/css/font-awesome.min.css');
	wp_enqueue_style ('flaticon', get_template_directory_uri().'/assets/fonts/flaticon/font/flaticon.css');
	wp_enqueue_style ('theme-style', get_template_directory_uri().'/assets/css/style.css');
	wp_enqueue_style ('main-style', get_stylesheet_uri());


	wp_enqueue_script( 'jquery-js', get_template_directory_uri() . '/assets/js/jquery-3.2.1.min.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'jquery-migrate-js', get_template_directory_uri() . '/assets/js/jquery-migrate-3.0.1.min.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'popper-js', get_template_directory_uri() . '/assets/js/popper.min.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'owl-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'waypoints-js', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'magnific-popup-js', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'bootstrap-datepicker', get_template_directory_uri() . '/assets/js/bootstrap-datepicker.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'timepicker-js', get_template_directory_uri() . '/assets/js/jquery.timepicker.min.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'stellar-js', get_template_directory_uri() . '/assets/js/jquery.stellar.min.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'easing-js', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'aos-js', get_template_directory_uri() . '/assets/js/aos.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'wptheme-jquery.isotope.js', get_template_directory_uri() . '/assets/js/jquery.isotope.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'google-maps', '//maps.googleapis.com/maps/api/js?key=AIzaSyATGPoAste7BSOlZ34WHNm1qI3tIJy-cwc', true );
	wp_enqueue_script( 'imagesloaded-js', get_template_directory_uri() . '/assets/js/imagesloaded.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'magnific-popup-options', get_template_directory_uri() . '/assets/js/magnific-popup-options.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'isotope-js', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'portfolio-js', get_template_directory_uri() . '/assets/js/portfolio.js', array( 'jquery' , 'magnific-popup-js', 'imagesloaded-js', 'isotope-js'),
		'1.0', true );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), '1.0', true );

}

add_action('wp_enqueue_scripts', 'meal_assets');
