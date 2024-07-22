<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Online Clothing Shop
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function onlineclothingshop_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'onlineclothingshop_body_classes' );



if ( ! function_exists( 'wp_body_open' ) ) {
	/**
	 * Backward compatibility for wp_body_open hook.
	 *
	 * @since 1.0.0
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
}


if (!function_exists('onlineclothingshop_str_replace_assoc')) {

    /**
     * onlineclothingshop_str_replace_assoc
     * @param  array $replace
     * @param  array $subject
     * @return array
     */
    function onlineclothingshop_str_replace_assoc(array $replace, $subject) {
        return str_replace(array_keys($replace), array_values($replace), $subject);
    }
}

 /**
 * Add WooCommerce Cart Icon With Cart Count (https://isabelcastillo.com/woocommerce-cart-icon-count-theme-header)
 */
function onlineclothingshop_add_to_cart_fragment( $fragments ) {
	
    ob_start();
    $count = WC()->cart->cart_contents_count;
    ?> 
	
	<a class="nav-link cart-icon-wrap header-cart" href="javascript:void(0);" role="button" data-bs-toggle="collapse" data-bs-target="#Cart">
		<svg width="20" height="21"><path d="M19.167 6.769 20 10.76c0 .435-.35.787-.781.787h-.514l-.721 6.544a.784.784 0 0 1-.863.695.786.786 0 0 1-.689-.871l.798-7.243a.784.784 0 0 1 .777-.7h.431V8.397H1.563v1.575h16.653c.432 0 .781.354.781.788a.783.783 0 0 1-.781.787H2.882l.771 6.489a1.568 1.568 0 0 0 1.552 1.388h9.653c.796 0 1.464-.602 1.553-1.4a.783.783 0 0 1 .863-.694.785.785 0 0 1 .689.87 3.131 3.131 0 0 1-3.105 2.799H5.205a3.136 3.136 0 0 1-3.103-2.776l-.794-6.676H.781A.784.784 0 0 1 0 10.76V7.609c0-.435.35-.787.781-.787h2.771L9.347.317a.778.778 0 0 1 1.092-.169.792.792 0 0 1 .167 1.102L5.491 6.822h9.047L9.422 1.25A.793.793 0 0 1 9.59.148a.778.778 0 0 1 1.092.169l5.795 6.505h2.742c.431 0-.052-.488-.052-.053ZM9.219 13.91v3.151c0 .435.349.787.781.787a.784.784 0 0 0 .781-.787V13.91a.784.784 0 0 0-.781-.787.783.783 0 0 0-.781.787Zm3.125 0v3.151c0 .435.349.787.781.787a.784.784 0 0 0 .781-.787V13.91a.784.784 0 0 0-.781-.787.783.783 0 0 0-.781.787Zm-6.25 0v3.151c0 .435.35.787.781.787a.784.784 0 0 0 .781-.787V13.91a.784.784 0 0 0-.781-.787.784.784 0 0 0-.781.787Z"/></svg>
		<?php
		if ( $count > 0 ) { 
		?>
			<span><?php echo esc_html( $count ); ?></span>
		<?php            
		} else {
		?>	
			<span><?php echo esc_html__('0','online-clothing-shop'); ?></span>
		<?php
		}
		?>
	</a>
	<?php
 
    $fragments['.cart-icon-wrap'] = ob_get_clean();
     
    return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'onlineclothingshop_add_to_cart_fragment' );



 /**
 * Breadcrumb Title
 */
 
if ( ! function_exists( 'onlineclothingshop_breadcrumb_title' ) ) {
	function onlineclothingshop_breadcrumb_title() {
		
		if ( is_home() || is_front_page()):
			
			single_post_title();
			
		elseif ( is_day() ) : 
										
			printf( __( 'Daily Archives: %s', 'online-clothing-shop' ), get_the_date() );
		
		elseif ( is_month() ) :
		
			printf( __( 'Monthly Archives: %s', 'online-clothing-shop' ), (get_the_date( 'F Y' ) ));
			
		elseif ( is_year() ) :
		
			printf( __( 'Yearly Archives: %s', 'online-clothing-shop' ), (get_the_date( 'Y' ) ) );
			
		elseif ( is_category() ) :
		
			printf( __( 'Category Archives: %s', 'online-clothing-shop' ), (single_cat_title( '', false ) ));

		elseif ( is_tag() ) :
		
			printf( __( 'Tag Archives: %s', 'online-clothing-shop' ), (single_tag_title( '', false ) ));
			
		elseif ( is_404() ) :

			printf( __( 'Error 404', 'online-clothing-shop' ));
			
		elseif ( is_author() ) :
		
			printf( __( 'Author: %s', 'online-clothing-shop' ), (get_the_author( '', false ) ));		
			
		elseif ( class_exists( 'woocommerce' ) ) : 
			
			if ( is_shop() ) {
				woocommerce_page_title();
			}
			
			elseif ( is_cart() ) {
				the_title();
			}
			
			elseif ( is_checkout() ) {
				the_title();
			}
			
			else {
				the_title();
			}
		else :
				the_title();
				
		endif;
	}
}


 /**
 * Breadcrumb Content
 */

function onlineclothingshop_breadcrumbs() {
	
	$showOnHome	= esc_html__('1','online-clothing-shop'); 	// 1 - Show breadcrumbs on the homepage, 0 - don't show
	$delimiter 	= '';   // Delimiter between breadcrumb
	$home 		= esc_html__('Home','online-clothing-shop'); 	// Text for the 'Home' link
	$showCurrent= esc_html__('1','online-clothing-shop'); // Current post/page title in breadcrumb in use 1, Use 0 for don't show
	$before		= '<li class="active">'; // Tag before the current Breadcrumb
	$after 		= '</li>'; // Tag after the current Breadcrumb
	$seprator	= get_theme_mod('seprator','<span style="color: #fff;margin: 0 10px;">/</span>');
	global $post;
	$homeLink = home_url();

	if (is_home() || is_front_page()) {
 
	if ($showOnHome == 1) echo '<li><a href="' . esc_url($homeLink) . '">' . esc_html($home) . '</a></li>';
 
	} else {
 
    echo '<li><a href="' . esc_url($homeLink) . '">' . esc_html($home).'</a>'.'&nbsp'.wp_kses_post($seprator).'&nbsp';
 
    if ( is_category() ) 
	{
		$thisCat = get_category(get_query_var('cat'), false);
		if ($thisCat->parent != 0) echo get_category_parents($thisCat->parent, TRUE, ' ' . ' ');
		echo $before . esc_html__('Archive by category','online-clothing-shop').' "' . esc_html(single_cat_title('', false)) . '"' .$after;
		
	} 
	
	elseif ( is_search() ) 
	{
		echo $before . esc_html__('Search results for','online-clothing-shop').' "' . esc_html(get_search_query()) . '"' . $after;
	} 
	
	elseif ( is_day() )
	{
		echo '<a href="' . esc_url(get_year_link(get_the_time('Y'))) . '">' . esc_html(get_the_time('Y')) . '</a> ' . '&nbsp' . wp_kses_post($seprator) . '&nbsp';
		echo '<a href="' . esc_url(get_month_link(get_the_time('Y'),get_the_time('m'))) . '">' . esc_html(get_the_time('F')) . '</a> '. '&nbsp' . wp_kses_post($seprator) . '&nbsp';
		echo $before . esc_html(get_the_time('d')) . $after;
	} 
	
	elseif ( is_month() )
	{
		echo '<a href="' . esc_url(get_year_link(get_the_time('Y'))) . '">' . esc_html(get_the_time('Y')) . '</a> ' . esc_attr($delimiter) . '&nbsp' . wp_kses_post($seprator) . '&nbsp';
		echo $before . esc_html(get_the_time('F')) . $after;
	} 
	
	elseif ( is_year() )
	{
		echo $before . esc_html(get_the_time('Y')) . $after;
	} 
	
	elseif ( is_single() && !is_attachment() )
	{
		if ( get_post_type() != 'post' )
		{
			if ( class_exists( 'WooCommerce' ) ) {
				if ($showCurrent == 1) echo ' ' . esc_attr($delimiter) . '&nbsp&nbsp' . $before . wp_kses_post(get_the_title()) . $after;
			}else{	
			$post_type = get_post_type_object(get_post_type());
			$slug = $post_type->rewrite;
			echo '<a href="' . esc_url($homeLink) . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>';
			if ($showCurrent == 1) echo ' ' . esc_attr($delimiter) . '&nbsp' . wp_kses_post($seprator) . '&nbsp' . $before . wp_kses_post(get_the_title()) . $after;
			}
		}
		else
		{
			$cat = get_the_category(); $cat = $cat[0];
			$cats = get_category_parents($cat, TRUE, ' ' . esc_attr($delimiter) . '&nbsp' . wp_kses_post($seprator) . '&nbsp');
			if ($showCurrent == 0) $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
			echo $cats;
			if ($showCurrent == 1) echo $before . esc_html(get_the_title()) . $after;
		}
 
    }
		
	elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
		if ( class_exists( 'WooCommerce' ) ) {
			if ( is_shop() ) {
				$thisshop = woocommerce_page_title();
			}
		}	
		else  {
			$post_type = get_post_type_object(get_post_type());
			echo $before . $post_type->labels->singular_name . $after;
		}	
	} 
	
	elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) 
	{
		$post_type = get_post_type_object(get_post_type());
		echo $before . $post_type->labels->singular_name . $after;
	} 
	
	elseif ( is_attachment() ) 
	{
		$parent = get_post($post->post_parent);
		$cat = get_the_category($parent->ID); 
		if(!empty($cat)){
		$cat = $cat[0];
		echo get_category_parents($cat, TRUE, ' ' . esc_attr($delimiter) . '&nbsp' . wp_kses_post($seprator) . '&nbsp');
		}
		echo '<a href="' . esc_url(get_permalink($parent)) . '">' . $parent->post_title . '</a>';
		if ($showCurrent == 1) echo ' ' . esc_attr($delimiter) . ' ' . $before . esc_html(get_the_title()) . $after;
 
    } 
	
	elseif ( is_page() && !$post->post_parent ) 
	{
		if ($showCurrent == 1) echo $before . esc_html(get_the_title()) . $after;
	} 
	
	elseif ( is_page() && $post->post_parent ) 
	{
		$parent_id  = $post->post_parent;
		$breadcrumbs = array();
		while ($parent_id) 
		{
			$page = get_page($parent_id);
			$breadcrumbs[] = '<a href="' . esc_url(get_permalink($page->ID)) . '">' . esc_html(get_the_title($page->ID)) . '</a>' . '&nbsp' . wp_kses_post($seprator) . '&nbsp';
			$parent_id  = $page->post_parent;
		}
		
		$breadcrumbs = array_reverse($breadcrumbs);
		for ($i = 0; $i < count($breadcrumbs); $i++) 
		{
			echo $breadcrumbs[$i];
			if ($i != count($breadcrumbs)-1) echo ' ' . esc_attr($delimiter) . '&nbsp' . wp_kses_post($seprator) . '&nbsp';
		}
		if ($showCurrent == 1) echo ' ' . esc_attr($delimiter) . ' ' . $before . esc_html(get_the_title()) . $after;
 
    } 
	elseif ( is_tag() ) 
	{
		echo $before . esc_html__('Posts tagged ','online-clothing-shop').' "' . esc_html(single_tag_title('', false)) . '"' . $after;
	} 
	
	elseif ( is_author() ) {
		global $author;
		$userdata = get_userdata($author);
		echo $before . esc_html__('Articles posted by ','online-clothing-shop').'' . $userdata->display_name . $after;
	} 
	
	elseif ( is_404() ) {
		echo $before . esc_html__('Error 404 ','online-clothing-shop'). $after;
    }
	
    if ( get_query_var('paged') ) {
		if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo '';
		echo ' ( ' . esc_html__('Page','online-clothing-shop') . '' . esc_html(get_query_var('paged')). ' )';
		if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo '';
    }
 
    echo '</li>';
 
  }
}



/*******************************************************************************
 *  Get Started Notice
 *******************************************************************************/

add_action( 'wp_ajax_onlineclothingshop_dismissed_notice_handler', 'onlineclothingshop_ajax_notice_handler' );

/**
 * AJAX handler to store the state of dismissible notices.
 */
function onlineclothingshop_ajax_notice_handler() {
    if ( isset( $_POST['type'] ) ) {
        // Pick up the notice "type" - passed via jQuery (the "data-notice" attribute on the notice)
        $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        // Store it in the options table
        update_metadata( 'dismissed-' . $type, TRUE );
    }
}


/*******************************************************************************
 *  Plugin Installer
 *******************************************************************************/

add_action( 'wp_ajax_install_act_plugin', 'onlineclothingshop_admin_install_plugin' );

function onlineclothingshop_admin_install_plugin() {
    /**
     * Install Plugin.
     */
    include_once ABSPATH . '/wp-admin/includes/file.php';
    include_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
    include_once ABSPATH . 'wp-admin/includes/plugin-install.php';

    if ( ! file_exists( WP_PLUGIN_DIR . '/peccular-companion' ) ) {
        $api = plugins_api( 'plugin_information', array(
            'slug'   => sanitize_key( wp_unslash( 'peccular-companion' ) ),
            'fields' => array(
                'sections' => false,
            ),
        ) );

        $skin     = new WP_Ajax_Upgrader_Skin();
        $upgrader = new Plugin_Upgrader( $skin );
        $result   = $upgrader->install( $api->download_link );
    }

    // Activate plugin.
    if ( current_user_can( 'activate_plugin' ) ) {
        $result = activate_plugin( 'peccular-companion/peccular-companion.php' );
    }
}	