<?php

// Load the JS and CSS.
add_action( 'customize_controls_enqueue_scripts', function() {

	$version = wp_get_theme()->get( 'Version' );

	wp_enqueue_script(
		'onlineclothingshop-customize-section-button',
		get_theme_file_uri( 'assets/js/customize-controls.js' ),
		[ 'customize-controls' ],
		$version,
		true
	);
	wp_localize_script(
		'onlineclothingshop-customize-section-button',
		'onlineclothingshop_customizer_params',
		array( 
			'ajaxurl' => esc_url(admin_url( 'admin-ajax.php' ))
		)
	);

	wp_enqueue_style(
		'onlineclothingshop-customize-section-button',
		get_theme_file_uri( 'assets/css/customize-controls.css' ),
		[ 'customize-controls' ],
 		$version
	);

} );

 /**
 * Enqueue scripts and styles.
 */
function online_clothing_shop_scripts() {
	
	// Styles	

	wp_enqueue_style('swipermin',get_template_directory_uri().'/assets/css/swiper.min.css');

	wp_enqueue_style('swiper',get_template_directory_uri().'/assets/css/swiper.css');

	wp_enqueue_style('bootstrap-min',get_template_directory_uri().'/assets/css/bootstrap.min.css');
	
	wp_enqueue_style('owl-carousel-min',get_template_directory_uri().'/assets/css/owl.carousel.min.css');
	
	wp_enqueue_style('font-awesome',get_template_directory_uri().'/assets/css/fonts/font-awesome/css/font-awesome.min.css');
	
	wp_enqueue_style('animate',get_template_directory_uri().'/assets/css/animate.css');
	
	wp_enqueue_style('onlineclothingshop-editor-style',get_template_directory_uri().'/assets/css/editor-style.css');

	wp_enqueue_style('onlineclothingshop-main', get_template_directory_uri() . '/assets/css/main.css');
	
	wp_enqueue_style('onlineclothingshop-fontawesome', get_template_directory_uri() . '/assets/css/fontawesomefile.css');

	wp_enqueue_style('onlineclothingshop-woo', get_template_directory_uri() . '/assets/css/woo.css');
	
	wp_enqueue_style( 'onlineclothingshop-style', get_stylesheet_uri() );
	
	// Scripts
	wp_enqueue_script( 'jquery' );


    wp_enqueue_script('sliderscript', get_template_directory_uri().'/assets/js/sliderscript.js', array(), '1.1', true);

	wp_enqueue_script('swiperslide', get_template_directory_uri().'/assets/js/swiperslide.js', array(), '1.1', true);

	wp_enqueue_script('jquerymin', get_template_directory_uri() . '/assets/js/jquery.min.js', array('jquery'), true);

	wp_enqueue_script('swipermin', get_template_directory_uri() . '/assets/js/swiper.min.js', array('jquery'), false, true);

	wp_enqueue_script('swiperjs', get_template_directory_uri() . '/assets/js/swiper.js', array('jquery'), true);
	
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), false, true);

	wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), false, true);
	
	wp_enqueue_script('wow-min', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), false, false, true);

	wp_enqueue_script('onlineclothingshop-custom-js', get_template_directory_uri() . '/assets/js/theme.js', array('jquery'), false, true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'online_clothing_shop_scripts' );



