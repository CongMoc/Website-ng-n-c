<?php
function onlineclothingshop_blog_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
		'onlineclothingshop_frontpage_sections', array(
			'priority' => 32,
			'title' => esc_html__( 'Frontpage Sections', 'online-clothing-shop' ),
		)
	);
	

	/*=========================================
	bannerimg Section
	=========================================*/
	$wp_customize->add_section(
		'bannerimg_setting', array(
			'title' => esc_html__( 'Banner Image Section', 'online-clothing-shop' ),
			'priority' => 1,
			'panel' => 'onlineclothingshop_frontpage_sections',
		)
	);


	// General Tab

	// bannerimgsection_image
	$wp_customize->add_setting(
    	'bannerimgsection_image',
	    array(
	        'sanitize_callback' => 'esc_url_raw'
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'bannerimgsection_image',
	        array(
			    'label'   		=> __('Image','online-clothing-shop'),
				'description'=> __('Image Size Should Be 1500*780','online-clothing-shop'),
	            'section' => 'bannerimg_setting',
	            'settings' => 'bannerimgsection_image'
	        )
	    )
	);


	// /*=========================================
	// Banner Section
	// =========================================*/
	// $wp_customize->add_section(
	// 	'banner_setting', array(
	// 		'title' => esc_html__( 'Banner Section', 'online-clothing-shop' ),
	// 		'description'=> __('<a>Note :</a> Image Size Should Be 800*600','online-clothing-shop'),
	// 		'priority' => 1,
	// 		'panel' => 'onlineclothingshop_frontpage_sections',
	// 	)
	// );


	// $wp_customize->add_setting('onlineclothingshop_banner_tabs', array(
	//    'sanitize_callback' => 'wp_kses_post',
	// ));

	// $wp_customize->add_control(new onlineclothingshop_Tab_Control($wp_customize, 'onlineclothingshop_banner_tabs', array(
	//    'section' => 'banner_setting',
	//    'priority' => 2,
	//    'buttons' => array(
	//       array(
    //      	'name' => esc_html__('General', 'online-clothing-shop'),
    //         'icon' => 'dashicons dashicons-welcome-write-blog',
    //         'fields' => array(
	// 			'banner_image',
    //         	'banner_heading',
	// 			'banner_offettext',
	// 			'banner_offerno',
	// 			'banner_btnlink'

    //         ),
    //         'active' => true,
    //      ), 
	//       array(
    //         'name' => esc_html__('Style', 'online-clothing-shop'),
    //     	'icon' => 'dashicons dashicons-art',
    //         'fields' => array(
    //             'banner_contentbgcolor',
	// 			'banner_headingcolor',
	// 			'banner_headingbg1color',
	// 			'banner_headingbg2color',
	// 			'banner_offertextcolor',
	// 			'banner_offernumcolor',
	// 			'banner_offerpercentcolor',
	// 			'banner_btntextcolor',
	// 			'banner_btnbg1color',
	// 			'banner_btnbg2color',
	// 			'banner_btntexthrvcolor'

    //         ),
    //  	)
    // 	),
	// ))); 


	// // General Tab


	// // banner_image
	// $wp_customize->add_setting(
    // 	'banner_image',
	//     array(
	//         'sanitize_callback' => 'esc_url_raw'
	//     )
	// );
	// $wp_customize->add_control(
	//     new WP_Customize_Image_Control(
	//         $wp_customize,
	//         'banner_image',
	//         array(
	// 		    'label'   		=> __('Image','online-clothing-shop'),
	//             'section' => 'banner_setting',
	//             'settings' => 'banner_image'
	//         )
	//     )
	// );

	// // banner heading
	// $bannerheading = esc_html__('', 'online-clothing-shop' );
	// $wp_customize->add_setting(
    // 	'banner_heading',
    // 	array(
	// 		'default' => $bannerheading,
	// 		'capability'     	=> 'edit_theme_options',
	// 		'sanitize_callback' => 'wp_kses_post',
	// 		'priority'      => 6,
	// 	)
	// );	

	// $wp_customize->add_control( 
	// 	'banner_heading',
	// 	array(
	// 	    'label'   		=> __('Heading','online-clothing-shop'),
	// 	    'section'		=> 'banner_setting',
	// 		'type' 			=> 'text',
	// 		'transport'         => $selective_refresh,
	// 	)  
	// );	

	// // banner offettext
	// $banneroffettext = esc_html__('', 'online-clothing-shop' );
	// $wp_customize->add_setting(
    // 	'banner_offettext',
    // 	array(
	// 		'default' => $banneroffettext,
	// 		'capability'     	=> 'edit_theme_options',
	// 		'sanitize_callback' => 'wp_kses_post',
	// 		'priority'      => 6,
	// 	)
	// );	

	// $wp_customize->add_control( 
	// 	'banner_offettext',
	// 	array(
	// 	    'label'   		=> __('Offet Text','online-clothing-shop'),
	// 	    'section'		=> 'banner_setting',
	// 		'type' 			=> 'text',
	// 		'transport'         => $selective_refresh,
	// 	)  
	// );	

	// // banner offerno
	// $bannerofferno = esc_html__('', 'online-clothing-shop' );
	// $wp_customize->add_setting(
    // 	'banner_offerno',
    // 	array(
	// 		'default' => $bannerofferno,
	// 		'capability'     	=> 'edit_theme_options',
	// 		'sanitize_callback' => 'wp_kses_post',
	// 		'priority'      => 6,
	// 	)
	// );	

	// $wp_customize->add_control( 
	// 	'banner_offerno',
	// 	array(
	// 	    'label'   		=> __('Offer Number','online-clothing-shop'),
	// 	    'section'		=> 'banner_setting',
	// 		'type' 			=> 'text',
	// 		'transport'         => $selective_refresh,
	// 	)  
	// );	

	// // banner btnlink
	// $bannerbtnlink = esc_html__('', 'online-clothing-shop' );
	// $wp_customize->add_setting(
    // 	'banner_btnlink',
    // 	array(
	// 		'default' => $bannerbtnlink,
	// 		'capability'     	=> 'edit_theme_options',
	// 		'sanitize_callback' => 'wp_kses_post',
	// 		'priority'      => 6,
	// 	)
	// );	

	// $wp_customize->add_control( 
	// 	'banner_btnlink',
	// 	array(
	// 	    'label'   		=> __('Button Link','online-clothing-shop'),
	// 	    'section'		=> 'banner_setting',
	// 		'type' 			=> 'text',
	// 		'transport'         => $selective_refresh,
	// 	)  
	// );	
	
	// //style

	// // banner contentbg Color 
	// $bannercontentbgcolor = esc_html__('#757879', 'online-clothing-shop' );
	// $wp_customize->add_setting(
    // 	'banner_contentbgcolor',
    // 	array(
	// 		'default' => $bannercontentbgcolor,
	// 		'capability'     	=> 'edit_theme_options',
	// 		'sanitize_callback' => 'wp_kses_post',
	// 		'priority'      => 3,
	// 	)
	// );	

	// $wp_customize->add_control( 
	// 	'banner_contentbgcolor',
	// 	array(
	// 	    'label'   		=> __('Content BG Color','online-clothing-shop'),
	// 	    'section'		=> 'banner_setting',
	// 		'type' 			=> 'color',
	// 		'transport'         => $selective_refresh,
	// 	)  
	// );	

	// // banner heading Color 
	// $bannerheadingcolor = esc_html__('#000', 'online-clothing-shop' );
	// $wp_customize->add_setting(
    // 	'banner_headingcolor',
    // 	array(
	// 		'default' => $bannerheadingcolor,
	// 		'capability'     	=> 'edit_theme_options',
	// 		'sanitize_callback' => 'wp_kses_post',
	// 		'priority'      => 3,
	// 	)
	// );	

	// $wp_customize->add_control( 
	// 	'banner_headingcolor',
	// 	array(
	// 	    'label'   		=> __('Heading Color','online-clothing-shop'),
	// 	    'section'		=> 'banner_setting',
	// 		'type' 			=> 'color',
	// 		'transport'         => $selective_refresh,
	// 	)  
	// );	

	// // banner headingbg1 Color 
	// $bannerheadingbg1color = esc_html__('#FFED02', 'online-clothing-shop' );
	// $wp_customize->add_setting(
    // 	'banner_headingbg1color',
    // 	array(
	// 		'default' => $bannerheadingbg1color,
	// 		'capability'     	=> 'edit_theme_options',
	// 		'sanitize_callback' => 'wp_kses_post',
	// 		'priority'      => 3,
	// 	)
	// );	

	// $wp_customize->add_control( 
	// 	'banner_headingbg1color',
	// 	array(
	// 	    'label'   		=> __('Heading BG Color','online-clothing-shop'),
	// 	    'section'		=> 'banner_setting',
	// 		'type' 			=> 'color',
	// 		'transport'         => $selective_refresh,
	// 	)  
	// );

	// // banner headingbg2 Color 
	// $bannerheadingbg2color = esc_html__('#fff', 'online-clothing-shop' );
	// $wp_customize->add_setting(
    // 	'banner_headingbg2color',
    // 	array(
	// 		'default' => $bannerheadingbg2color,
	// 		'capability'     	=> 'edit_theme_options',
	// 		'sanitize_callback' => 'wp_kses_post',
	// 		'priority'      => 3,
	// 	)
	// );	

	// $wp_customize->add_control( 
	// 	'banner_headingbg2color',
	// 	array(
	// 	    'label'   		=> __('Heading BG Color','online-clothing-shop'),
	// 	    'section'		=> 'banner_setting',
	// 		'type' 			=> 'color',
	// 		'transport'         => $selective_refresh,
	// 	)  
	// );

	// // banner offertext Color 
	// $banneroffertextcolor = esc_html__('#fff', 'online-clothing-shop' );
	// $wp_customize->add_setting(
    // 	'banner_offertextcolor',
    // 	array(
	// 		'default' => $banneroffertextcolor,
	// 		'capability'     	=> 'edit_theme_options',
	// 		'sanitize_callback' => 'wp_kses_post',
	// 		'priority'      => 3,
	// 	)
	// );	

	// $wp_customize->add_control( 
	// 	'banner_offertextcolor',
	// 	array(
	// 	    'label'   		=> __('Offer Text Color','online-clothing-shop'),
	// 	    'section'		=> 'banner_setting',
	// 		'type' 			=> 'color',
	// 		'transport'         => $selective_refresh,
	// 	)  
	// );

	// // banner offernum Color 
	// $banneroffernumcolor = esc_html__('#fff', 'online-clothing-shop' );
	// $wp_customize->add_setting(
    // 	'banner_offernumcolor',
    // 	array(
	// 		'default' => $banneroffernumcolor,
	// 		'capability'     	=> 'edit_theme_options',
	// 		'sanitize_callback' => 'wp_kses_post',
	// 		'priority'      => 3,
	// 	)
	// );	

	// $wp_customize->add_control( 
	// 	'banner_offernumcolor',
	// 	array(
	// 	    'label'   		=> __('Offer Number Color','online-clothing-shop'),
	// 	    'section'		=> 'banner_setting',
	// 		'type' 			=> 'color',
	// 		'transport'         => $selective_refresh,
	// 	)  
	// );

	// // banner offerpercent Color 
	// $bannerofferpercentcolor = esc_html__('#FFED02', 'online-clothing-shop' );
	// $wp_customize->add_setting(
    // 	'banner_offerpercentcolor',
    // 	array(
	// 		'default' => $bannerofferpercentcolor,
	// 		'capability'     	=> 'edit_theme_options',
	// 		'sanitize_callback' => 'wp_kses_post',
	// 		'priority'      => 3,
	// 	)
	// );	

	// $wp_customize->add_control( 
	// 	'banner_offerpercentcolor',
	// 	array(
	// 	    'label'   		=> __('Offer Percent Color','online-clothing-shop'),
	// 	    'section'		=> 'banner_setting',
	// 		'type' 			=> 'color',
	// 		'transport'         => $selective_refresh,
	// 	)  
	// );

	// // banner btntext Color 
	// $bannerbtntextcolor = esc_html__('#fff', 'online-clothing-shop' );
	// $wp_customize->add_setting(
    // 	'banner_btntextcolor',
    // 	array(
	// 		'default' => $bannerbtntextcolor,
	// 		'capability'     	=> 'edit_theme_options',
	// 		'sanitize_callback' => 'wp_kses_post',
	// 		'priority'      => 3,
	// 	)
	// );	

	// $wp_customize->add_control( 
	// 	'banner_btntextcolor',
	// 	array(
	// 	    'label'   		=> __('Button Text Color','online-clothing-shop'),
	// 	    'section'		=> 'banner_setting',
	// 		'type' 			=> 'color',
	// 		'transport'         => $selective_refresh,
	// 	)  
	// );

	// // banner btnbg1 Color 
	// $bannerbtnbg1color = esc_html__('#fff', 'online-clothing-shop' );
	// $wp_customize->add_setting(
    // 	'banner_btnbg1color',
    // 	array(
	// 		'default' => $bannerbtnbg1color,
	// 		'capability'     	=> 'edit_theme_options',
	// 		'sanitize_callback' => 'wp_kses_post',
	// 		'priority'      => 3,
	// 	)
	// );	

	// $wp_customize->add_control( 
	// 	'banner_btnbg1color',
	// 	array(
	// 	    'label'   		=> __('Button BG Color','online-clothing-shop'),
	// 	    'section'		=> 'banner_setting',
	// 		'type' 			=> 'color',
	// 		'transport'         => $selective_refresh,
	// 	)  
	// );

	// // banner btnbg2 Color 
	// $bannerbtnbg2color = esc_html__('#ffc7c5', 'online-clothing-shop' );
	// $wp_customize->add_setting(
    // 	'banner_btnbg2color',
    // 	array(
	// 		'default' => $bannerbtnbg2color,
	// 		'capability'     	=> 'edit_theme_options',
	// 		'sanitize_callback' => 'wp_kses_post',
	// 		'priority'      => 3,
	// 	)
	// );	

	// $wp_customize->add_control( 
	// 	'banner_btnbg2color',
	// 	array(
	// 	    'label'   		=> __('Button BG Color','online-clothing-shop'),
	// 	    'section'		=> 'banner_setting',
	// 		'type' 			=> 'color',
	// 		'transport'         => $selective_refresh,
	// 	)  
	// );

	// // banner btntexthrv Color 
	// $bannerbtntexthrvcolor = esc_html__('#757879', 'online-clothing-shop' );
	// $wp_customize->add_setting(
    // 	'banner_btntexthrvcolor',
    // 	array(
	// 		'default' => $bannerbtntexthrvcolor,
	// 		'capability'     	=> 'edit_theme_options',
	// 		'sanitize_callback' => 'wp_kses_post',
	// 		'priority'      => 3,
	// 	)
	// );	

	// $wp_customize->add_control( 
	// 	'banner_btntexthrvcolor',
	// 	array(
	// 	    'label'   		=> __('Button Text Hover Color','online-clothing-shop'),
	// 	    'section'		=> 'banner_setting',
	// 		'type' 			=> 'color',
	// 		'transport'         => $selective_refresh,
	// 	)  
	// );

	
	/*=========================================
	collection Section
	=========================================*/
	$wp_customize->add_section(
		'collection_setting', array(
			'title' => esc_html__( 'Collection Section', 'online-clothing-shop' ),
			'description'=> __('<a>Note :</a> Image Size Should Be 800*600','online-clothing-shop'),
			'priority' => 1,
			'panel' => 'onlineclothingshop_frontpage_sections',
		)
	);



	$wp_customize->add_setting('onlineclothingshop_collection_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new onlineclothingshop_Tab_Control($wp_customize, 'onlineclothingshop_collection_tabs', array(
	   'section' => 'collection_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'online-clothing-shop'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'collection_heading'
            ),
            'active' => true,
         ), 
	      array(
            'name' => esc_html__('Style', 'online-clothing-shop'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
                'collection_headingcolor',
				'collection_titlecolor',
				'collection_titlebgcolor'
            ),
     	)
    	),
	))); 


	// General Tab

	// collection heading
	$collectionheading = esc_html__('', 'online-clothing-shop' );
	$wp_customize->add_setting(
    	'collection_heading',
    	array(
			'default' => $collectionheading,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'collection_heading',
		array(
		    'label'   		=> __('Collection Heading','online-clothing-shop'),
		    'section'		=> 'collection_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	//style
	// collection heading Color 
	$collectionheadingcolor = esc_html__('#000', 'online-clothing-shop' );
	$wp_customize->add_setting(
    	'collection_headingcolor',
    	array(
			'default' => $collectionheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'collection_headingcolor',
		array(
		    'label'   		=> __('Heading Color','online-clothing-shop'),
		    'section'		=> 'collection_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// collection title Color 
	$collectiontitlecolor = esc_html__('#fff', 'online-clothing-shop' );
	$wp_customize->add_setting(
    	'collection_titlecolor',
    	array(
			'default' => $collectiontitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'collection_titlecolor',
		array(
		    'label'   		=> __('Title Color','online-clothing-shop'),
		    'section'		=> 'collection_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// collection titlebg Color 
	$collectiontitlebgcolor = esc_html__('#000', 'online-clothing-shop' );
	$wp_customize->add_setting(
    	'collection_titlebgcolor',
    	array(
			'default' => $collectiontitlebgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'collection_titlebgcolor',
		array(
		    'label'   		=> __('Title BG Color','online-clothing-shop'),
		    'section'		=> 'collection_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	/*=========================================
	featured Section
	=========================================*/
	$wp_customize->add_section(
		'featured_setting', array(
			'title' => esc_html__( 'Featured Product Section', 'online-clothing-shop' ),
			'description'=> __('<a>Note :</a> Image Size Should Be 800*600','online-clothing-shop'),
			'priority' => 1,
			'panel' => 'onlineclothingshop_frontpage_sections',
		)
	);


	$wp_customize->add_setting('onlineclothingshop_featured_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new onlineclothingshop_Tab_Control($wp_customize, 'onlineclothingshop_featured_tabs', array(
	   'section' => 'featured_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'online-clothing-shop'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'featured_heading'
            ),
            'active' => true,
         ), 
	      array(
            'name' => esc_html__('Style', 'online-clothing-shop'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
                'featured_headingcolor',
				'featured_titlecolor',
				'featured_salepricecolor'
            ),
     	)
    	),
	))); 


	// General Tab

	// featured heading
	$featuredheading = esc_html__('', 'online-clothing-shop' );
	$wp_customize->add_setting(
    	'featured_heading',
    	array(
			'default' => $featuredheading,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'featured_heading',
		array(
		    'label'   		=> __('Heading','online-clothing-shop'),
		    'section'		=> 'featured_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	//style
	// featured heading Color 
	$featuredheadingcolor = esc_html__('#000', 'online-clothing-shop' );
	$wp_customize->add_setting(
    	'featured_headingcolor',
    	array(
			'default' => $featuredheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'featured_headingcolor',
		array(
		    'label'   		=> __('Featured Heading Color','online-clothing-shop'),
		    'section'		=> 'featured_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// featured title Color 
	$featuredtitlecolor = esc_html__('#000', 'online-clothing-shop' );
	$wp_customize->add_setting(
    	'featured_titlecolor',
    	array(
			'default' => $featuredtitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'featured_titlecolor',
		array(
		    'label'   		=> __('Product Title Color','online-clothing-shop'),
		    'section'		=> 'featured_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// featured saleprice Color 
	$featuredsalepricecolor = esc_html__('#000', 'online-clothing-shop' );
	$wp_customize->add_setting(
    	'featured_salepricecolor',
    	array(
			'default' => $featuredsalepricecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'featured_salepricecolor',
		array(
		    'label'   		=> __('Product Price Color','online-clothing-shop'),
		    'section'		=> 'featured_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	

	$wp_customize->register_control_type('onlineclothingshop_Tab_Control');

}

add_action( 'customize_register', 'onlineclothingshop_blog_setting' );

// service selective refresh
function onlineclothingshop_blog_section_partials( $wp_customize ){	
	// blog_title
	$wp_customize->selective_refresh->add_partial( 'blog_title', array(
		'selector'            => '.home-blog .title h6',
		'settings'            => 'blog_title',
		'render_callback'  => 'onlineclothingshop_blog_title_render_callback',
	
	) );
	
	// blog_subtitle
	$wp_customize->selective_refresh->add_partial( 'blog_subtitle', array(
		'selector'            => '.home-blog .title h2',
		'settings'            => 'blog_subtitle',
		'render_callback'  => 'onlineclothingshop_blog_subtitle_render_callback',
	
	) );
	
	// blog_description
	$wp_customize->selective_refresh->add_partial( 'blog_description', array(
		'selector'            => '.home-blog .title p',
		'settings'            => 'blog_description',
		'render_callback'  => 'onlineclothingshop_blog_description_render_callback',
	
	) );	
	}

add_action( 'customize_register', 'onlineclothingshop_blog_section_partials' );

// blog_title
function onlineclothingshop_blog_title_render_callback() {
	return get_theme_mod( 'blog_title' );
}

// blog_subtitle
function onlineclothingshop_blog_subtitle_render_callback() {
	return get_theme_mod( 'blog_subtitle' );
}

// service description
function onlineclothingshop_blog_description_render_callback() {
	return get_theme_mod( 'blog_description' );
}


