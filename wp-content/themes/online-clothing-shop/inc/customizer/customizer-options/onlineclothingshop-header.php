<?php
function onlineclothingshop_header_settings( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Header Settings Panel
	=========================================*/
	$wp_customize->add_panel( 
		'header_section', 
		array(
			'priority'      => 2,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Header', 'online-clothing-shop'),
		) 
	);

	
	/*=========================================
	Online Clothing Shop Site Identity
	=========================================*/
	$wp_customize->add_section(
        'title_tagline',
        array(
        	'priority'      => 1,
            'title' 		=> __('Site Identity','online-clothing-shop'),
			'panel'  		=> 'header_section',
		)
    );





    // top header Site Title Color
	$topheadersitetitlecol = esc_html__('#000', 'online-clothing-shop' );
	$wp_customize->add_setting(
    	'topheader_sitetitlecol',
    	array(
			'default' => $topheadersitetitlecol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'topheader_sitetitlecol',
		array(
		    'label'   		=> __('Site Title Color','online-clothing-shop'),
		    'section'		=> 'title_tagline',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// top header Tagline Color
	$topheadertaglinecol = esc_html__('#000', 'online-clothing-shop' );
	$wp_customize->add_setting(
    	'topheader_taglinecol',
    	array(
			'default' => $topheadertaglinecol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'topheader_taglinecol',
		array(
		    'label'   		=> __('Tagline Color','online-clothing-shop'),
		    'section'		=> 'title_tagline',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);
	
 
	/*=========================================
	Online Clothing Shop header
	=========================================*/
	$wp_customize->add_section(
        'top_header',
        array(
        	'priority'      => 5,
            'title' 		=> __('Header','online-clothing-shop'),
			'panel'  		=> 'header_section',
		)
    );	


    $wp_customize->add_setting('onlineclothingshop_reset_header_settings',array(
	  'sanitize_callback'   => 'sanitize_text_field'
	));
	$wp_customize->add_control(new onlineclothingshop_Reset_Custom_Control($wp_customize, 'online_clothing_shop_reset_header_settings',array(
	  'type' => 'reset_control',
	   'priority' => 1,
	  'label' => __('Reset Header Settings', 'online-clothing-shop'),
	  'description' => 'online_clothing_shop_header_reset_settings',
	  'section' => 'top_header'
	)));



    $wp_customize->add_setting('onlineclothingshop_top_header_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new onlineclothingshop_Tab_Control($wp_customize, 'onlineclothingshop_top_header_tabs', array(
	   'section' => 'top_header',
	   'priority' => 1,
	   'buttons' => array(
	      array(
     		'name' => esc_html__('General', 'online-clothing-shop'),
 			'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'hide_show_sticky',
				'topheader_topheadtext1',
				'topheader_topheadtext1link',
				'topheader_topheadtext2',
				'topheader_topheadtext2link',
				'topheader_topheader_menlink',
				'topheader_topheader_womenlink'
            ),
            'active' => true,
         ),
	      array(
            'name' => esc_html__('Style', 'online-clothing-shop'),
            'icon' => 'dashicons dashicons-art',
            'fields' => array(
				'header_topheadbgcolor',
				'header_topheadtextcolor',
            	'header_bgcolor',
				'header_menuscolor',
            	'header_menuiconcolor',
            	'header_submenusbgcolor',
            	'header_submenutextcolor',
            	'header_submenustxthovercolor',
				'header_womenmentextcolor',
				'header_searchbariconcolor',
				'header_searchbarbgcolor',
				'header_carticoncolor',
				'header_cartnumcolor',
				'header_cartnumbgcolor',
				'header_acciconcolor'
            ),
         )
	    
    	),
	)));


	// general setting

	// sticky header
	$wp_customize->add_setting( 'hide_show_sticky',array(
        'default' => false,
        'sanitize_callback' => 'onlineclothingshop_switch_sanitization'
   	) );
   	$wp_customize->add_control( new onlineclothingshop_Toggle_Switch_Custom_Control( $wp_customize, 'hide_show_sticky',array(
        'label' => __( 'Show Sticky Header','online-clothing-shop' ),
        'section' => 'top_header'
   	)));


	// topheader topheadtext1
	$topheadertopheadtext1 = esc_html__('', 'online-clothing-shop' );
	$wp_customize->add_setting(
    	'topheader_topheadtext1',
    	array(
			'default' => $topheadertopheadtext1,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'topheader_topheadtext1',
		array(
		    'label'   		=> __('Top Head Text 1','online-clothing-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// topheader topheadtext1link
	$topheadertopheadtext1link = esc_html__('', 'online-clothing-shop' );
	$wp_customize->add_setting(
    	'topheader_topheadtext1link',
    	array(
			'default' => $topheadertopheadtext1link,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'topheader_topheadtext1link',
		array(
		    'label'   		=> __('Top Head Text 1 Link','online-clothing-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// topheader topheadtext2
	$topheadertopheadtext2 = esc_html__('', 'online-clothing-shop' );
	$wp_customize->add_setting(
    	'topheader_topheadtext2',
    	array(
			'default' => $topheadertopheadtext2,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'topheader_topheadtext2',
		array(
		    'label'   		=> __('Top Head Text 2','online-clothing-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// topheader topheadtext2link
	$topheadertopheadtext2link = esc_html__('', 'online-clothing-shop' );
	$wp_customize->add_setting(
    	'topheader_topheadtext2link',
    	array(
			'default' => $topheadertopheadtext2link,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'topheader_topheadtext2link',
		array(
		    'label'   		=> __('Top Head Text 2 Link','online-clothing-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// topheader topheader_womenlink
	$topheadertopheader_womenlink = esc_html__('', 'online-clothing-shop' );
	$wp_customize->add_setting(
		'topheader_topheader_womenlink',
		array(
			'default' => $topheadertopheader_womenlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'topheader_topheader_womenlink',
		array(
			'label'   		=> __('Women Text Link','online-clothing-shop'),
			'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);
	
	// topheader topheader_menlink
	$topheadertopheader_menlink = esc_html__('', 'online-clothing-shop' );
	$wp_customize->add_setting(
		'topheader_topheader_menlink',
		array(
			'default' => $topheadertopheader_menlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'topheader_topheader_menlink',
		array(
			'label'   		=> __('Men Text Link','online-clothing-shop'),
			'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);


	// Style setting

	// header topheadbg Color
	$headertopheadbgcolor = esc_html__('#212121', 'online-clothing-shop' );
	$wp_customize->add_setting(
    	'header_topheadbgcolor',
    	array(
			'default' => $headertopheadbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_topheadbgcolor',
		array(
		    'label'   		=> __('Top Head BG Color','online-clothing-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header topheadtext Color
	$headertopheadtextcolor = esc_html__('#fff', 'online-clothing-shop' );
	$wp_customize->add_setting(
    	'header_topheadtextcolor',
    	array(
			'default' => $headertopheadtextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_topheadtextcolor',
		array(
		    'label'   		=> __('Top Head Text Color','online-clothing-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header bg Color
	$headerbgcolor = esc_html__('#F4F4F4', 'online-clothing-shop' );
	$wp_customize->add_setting(
    	'header_bgcolor',
    	array(
			'default' => $headerbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_bgcolor',
		array(
		    'label'   		=> __('BG Color','online-clothing-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// header menus Color
	$headermenuscolor = esc_html__('#000', 'online-clothing-shop' );
	$wp_customize->add_setting(
    	'header_menuscolor',
    	array(
			'default' => $headermenuscolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_menuscolor',
		array(
		    'label'   		=> __('Menus Color','online-clothing-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header menuicon Color
	$headermenuiconcolor = esc_html__('#000', 'online-clothing-shop' );
	$wp_customize->add_setting(
    	'header_menuiconcolor',
    	array(
			'default' => $headermenuiconcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_menuiconcolor',
		array(
		    'label'   		=> __('SubMenu Icon Color','online-clothing-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	$headersubmenusbgcolor = esc_html__('#000', 'online-clothing-shop' );
	$wp_customize->add_setting(
    	'header_submenusbgcolor',
    	array(
			'default' => $headersubmenusbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenusbgcolor',
		array(
		    'label'   		=> __('SubMenus BG Color','online-clothing-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	

	// header submenutext Color
	$headersubmenutextcolor = esc_html__('#fff', 'online-clothing-shop' );
	$wp_customize->add_setting(
    	'header_submenutextcolor',
    	array(
			'default' => $headersubmenutextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenutextcolor',
		array(
		    'label'   		=> __('SubMenus Text Color','online-clothing-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// header submenustxthover Color
	$headersubmenustxthovercolor = esc_html__('#757879', 'online-clothing-shop' );
	$wp_customize->add_setting(
    	'header_submenustxthovercolor',
    	array(
			'default' => $headersubmenustxthovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenustxthovercolor',
		array(
		    'label'   		=> __('Menu Hover Color','online-clothing-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header womenmentext Color 
	$headerwomenmentextcolor = esc_html__('#212121', 'online-clothing-shop' );
	$wp_customize->add_setting(
    	'header_womenmentextcolor',
    	array(
			'default' => $headerwomenmentextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_womenmentextcolor',
		array(
		    'label'   		=> __('Women & Men Text Color','online-clothing-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header searchbaricon Color 
	$headersearchbariconcolor = esc_html__('#000', 'online-clothing-shop' );
	$wp_customize->add_setting(
    	'header_searchbariconcolor',
    	array(
			'default' => $headersearchbariconcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_searchbariconcolor',
		array(
		    'label'   		=> __('Search Bar Icon Color','online-clothing-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header searchbarbg Color 
	$headersearchbarbgcolor = esc_html__('#000', 'online-clothing-shop' );
	$wp_customize->add_setting(
    	'header_searchbarbgcolor',
    	array(
			'default' => $headersearchbarbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_searchbarbgcolor',
		array(
		    'label'   		=> __('Search Bar BG Color','online-clothing-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	
	// header carticon Color 
	$headercarticoncolor = esc_html__('#000', 'online-clothing-shop' );
	$wp_customize->add_setting(
    	'header_carticoncolor',
    	array(
			'default' => $headercarticoncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_carticoncolor',
		array(
		    'label'   		=> __('Cart Icon Color','online-clothing-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// header cartnum Color 
	$headercartnumcolor = esc_html__('#fff', 'online-clothing-shop' );
	$wp_customize->add_setting(
    	'header_cartnumcolor',
    	array(
			'default' => $headercartnumcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_cartnumcolor',
		array(
		    'label'   		=> __('Cart Number Color','online-clothing-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header cartnumbg Color 
	$headercartnumbgcolor = esc_html__('#8B060B', 'online-clothing-shop' );
	$wp_customize->add_setting(
    	'header_cartnumbgcolor',
    	array(
			'default' => $headercartnumbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_cartnumbgcolor',
		array(
		    'label'   		=> __('Cart Number BG Color','online-clothing-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header accicon Color 
	$headeracciconcolor = esc_html__('#000', 'online-clothing-shop' );
	$wp_customize->add_setting(
    	'header_acciconcolor',
    	array(
			'default' => $headeracciconcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_acciconcolor',
		array(
		    'label'   		=> __('Account Icon Color','online-clothing-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);



	$wp_customize->register_control_type('onlineclothingshop_Tab_Control');
	$wp_customize->register_panel_type( 'onlineclothingshop_WP_Customize_Panel' );
	$wp_customize->register_section_type( 'onlineclothingshop_WP_Customize_Section' );

}
add_action( 'customize_register', 'onlineclothingshop_header_settings' );



if ( class_exists( 'WP_Customize_Panel' ) ) {
  	class onlineclothingshop_WP_Customize_Panel extends WP_Customize_Panel {
	   public $panel;
	   public $type = 'onlineclothingshop_panel';
	   public function json() {

	      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'type', 'panel', ) );
	      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
	      $array['content'] = $this->get_content();
	      $array['active'] = $this->active();
	      $array['instanceNumber'] = $this->instance_number;
	      return $array;
    	}
  	}
}

if ( class_exists( 'WP_Customize_Section' ) ) {
  	class onlineclothingshop_WP_Customize_Section extends WP_Customize_Section {
	   public $section;
	   public $type = 'onlineclothingshop_section';
	   public function json() {

	      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'panel', 'type', 'description_hidden', 'section', ) );
	      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
	      $array['content'] = $this->get_content();
	      $array['active'] = $this->active();
	      $array['instanceNumber'] = $this->instance_number;

	      if ( $this->panel ) {
	        $array['customizeAction'] = sprintf( 'Customizing &#9656; %s', esc_html( $this->manager->get_panel( $this->panel )->title ) );
	      } else {
	        $array['customizeAction'] = 'Customizing';
	      }
	      return $array;
    	}
  	}
}






