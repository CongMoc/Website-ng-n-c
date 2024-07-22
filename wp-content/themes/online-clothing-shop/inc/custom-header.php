<?php
function onlineclothingshop_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'onlineclothingshop_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '646464',
		'width'                  => 2000, 
		'height'                 => 200,
		'flex-height'            => true,
		'wp-head-callback'       => 'onlineclothingshop_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'onlineclothingshop_custom_header_setup' );

if ( ! function_exists( 'onlineclothingshop_header_style' ) ) :

function onlineclothingshop_header_style() {
	$header_text_color = get_header_textcolor();

	?>
	<style type="text/css">


		<?php 
		
		?>


		header.site-header .site-title {
			color: <?php echo esc_attr(get_theme_mod('topheader_sitetitlecol')); ?>;

		}

		header.site-header .site-logo a {
			text-decoration-color: <?php echo esc_attr(get_theme_mod('topheader_sitetitlecol')); ?> !important;
		}

		p.site-description {
			color: <?php echo esc_attr(get_theme_mod('topheader_taglinecol')); ?>;
		}
		

		

		header .tophead {
			background: <?php echo esc_attr(get_theme_mod('header_topheadbgcolor')); ?>;
		}

		header .tophead .spbtn a,header .tophead .Ac_lgin a {
			color: <?php echo esc_attr(get_theme_mod('header_topheadtextcolor')); ?>;
		}

		.header-section {
			background: <?php echo esc_attr(get_theme_mod('header_bgcolor')); ?>;
		}

		.primary-menu a {
			color: <?php echo esc_attr(get_theme_mod('header_menuscolor')); ?>;
		}

		.primary-menu > li > .icon {
			color: <?php echo esc_attr(get_theme_mod('header_menuiconcolor')); ?>;
		}

		.primary-menu li ul li a {
			color: <?php echo esc_attr(get_theme_mod('header_submenutextcolor')); ?>;
		}

		.primary-menu ul {
			background: <?php echo esc_attr(get_theme_mod('header_submenusbgcolor')); ?>;
		}

		.primary-menu ul::after {
			border-bottom-color: <?php echo esc_attr(get_theme_mod('header_submenusbgcolor')); ?>;
		}

		.primary-menu a:hover, .primary-menu a:focus, .primary-menu .current_page_ancestor {
			color: <?php echo esc_attr(get_theme_mod('header_submenustxthovercolor')); ?>;
		}

		.headfer-content .gen_derbtn a {
			color: <?php echo esc_attr(get_theme_mod('header_womenmentextcolor')); ?> !important;
		}

		header #formButton:after, header button[type="submit"] {
			color: <?php echo esc_attr(get_theme_mod('header_searchbariconcolor')); ?> !important;
		}

		header .top-form form, header button[type="submit"] {
			background: <?php echo esc_attr(get_theme_mod('header_searchbarbgcolor')); ?> !important;
		}

		header .h-cart i {
			color: <?php echo esc_attr(get_theme_mod('header_carticoncolor')); ?> !important;
		}

		header .h-cart span {
			color: <?php echo esc_attr(get_theme_mod('header_cartnumcolor')); ?> !important;
		}

		header .h-cart span {
			background: <?php echo esc_attr(get_theme_mod('header_cartnumbgcolor')); ?> !important;
		}

		header .acc i {
			color: <?php echo esc_attr(get_theme_mod('header_acciconcolor')); ?> !important;
		}


		/* slider */
		.banner-section .content {
			background: <?php echo esc_attr(get_theme_mod('banner_contentbgcolor')); ?>;
		}

		.banner-section .heading h2 {
			color: <?php echo esc_attr(get_theme_mod('banner_headingcolor')); ?>;
		}

		.banner-section .heading,
		.banner-section .line1 {
			background: <?php echo esc_attr(get_theme_mod('banner_headingbg1color')); ?>;
		}

		.banner-section .heading:before,
		.banner-section .slide-shape:before,
		.banner-section .line2 {
			background: <?php echo esc_attr(get_theme_mod('banner_headingbg2color')); ?>;
		}

		.banner-section .discount h4 {
			color: <?php echo esc_attr(get_theme_mod('banner_offertextcolor')); ?>;
		}

		.banner-section h5 {
			color: <?php echo esc_attr(get_theme_mod('banner_offernumcolor')); ?>;
		}

		.banner-section h5:after {
			background: <?php echo esc_attr(get_theme_mod('banner_offerpercentcolor')); ?>;
		}

		.banner-section h5 i.fa.fa-percent {
			color: <?php echo esc_attr(get_theme_mod('banner_offerpercentcolor')); ?>;
		}

		.banner-section .banbtn a {
			color: <?php echo esc_attr(get_theme_mod('banner_btntextcolor')); ?>;
		}

		.banner-section .banbtn a {
			background-image: linear-gradient(0deg, <?php echo esc_attr(get_theme_mod('banner_btnbg1color')); ?> 50%, <?php echo esc_attr(get_theme_mod('banner_btnbg2color')); ?> 51%);
		}

		.banner-section .banbtn a:hover {
			color: <?php echo esc_attr(get_theme_mod('banner_btntexthrvcolor')); ?>;
		}


		
		/* collection */
		#collection-section .section-title h2 {
			color: <?php echo esc_attr(get_theme_mod('collection_headingcolor')); ?>;
		}

		#collection-section .pro-cat-content h5 a {
			color: <?php echo esc_attr(get_theme_mod('collection_titlecolor')); ?>;
		}

		#collection-section .p_oly {
			background-image: linear-gradient(to top, <?php echo esc_attr(get_theme_mod('collection_titlebgcolor')); ?> 5%, transparent 20%);
		}
	

	
		/* Featured */
		#featuredproduct-product-section .section-title h2 {
			color: <?php echo esc_attr(get_theme_mod('featured_headingcolor')); ?>;
		}

		#featuredproduct-product-section .pcontent h3 {
			color: <?php echo esc_attr(get_theme_mod('featured_titlecolor')); ?>;
		}

		#featuredproduct-product-section .sale-price .amount {
			color: <?php echo esc_attr(get_theme_mod('featured_salepricecolor')); ?>;
		}


	

		.copy-right p,.copy-right p a {
			color: <?php echo esc_attr(get_theme_mod('footer_copyrightcolor')); ?>;
		}

		.copy-right {
			background: <?php echo esc_attr(get_theme_mod('footer_copyrightbgcolor')); ?>;
		}

		.footer-area {
			background: <?php echo esc_attr(get_theme_mod('footer_bgcolor')); ?>;
		}

		.footer-area .footer-widget .w-title {
			color: <?php echo esc_attr(get_theme_mod('footer_widegtstitlecolor')); ?>;
		}

		.footer-area .widget_text, .footer-area .widget_text p, .wp-block-latest-comments__comment-excerpt p, .wp-block-latest-comments__comment-date, .has-avatars .wp-block-latest-comments__comment .wp-block-latest-comments__comment-excerpt, .has-avatars .wp-block-latest-comments__comment .wp-block-latest-comments__comment-meta,.footer-area .widget_block h1, .footer-area .widget_block h2, .footer-area .widget_block h3, .footer-area .widget_block h4, .footer-area .widget_block h5, .footer-area .widget_block h6,.footer-area .footer-widget .widget:not(.widget_social_widget):not(.widget_tag_cloud) li a,
		.footer-area .footer-widget .widget:not(.widget_social_widget):not(.widget_tag_cloud) li {
			color: <?php echo esc_attr(get_theme_mod('footer_textcolor')); ?>;
		}

		.footer-area .footer-widget .widget:not(.widget_social_widget):not(.widget_tag_cloud) li a:hover {
			color: <?php echo esc_attr(get_theme_mod('footer_listhovercolor')); ?>;
		}

		.footer-area .footer-widget .widget:not(.widget_social_widget):not(.widget_tag_cloud) li:before {
			color: <?php echo esc_attr(get_theme_mod('footer_listiconcolor')); ?>;
		}

		.scroll-top i{
			color: <?php echo esc_attr(get_theme_mod('footer_backtotopiconcolor')); ?>;
		}

		.scroll-top{
			background: <?php echo esc_attr(get_theme_mod('footer_backtotopbgcolor')); ?>;
		}

		.scroll-top:hover, .scroll-top:focus{
			background: <?php echo esc_attr(get_theme_mod('footer_backtotopbghrvcolor')); ?>;
		}

		
	<?php  ?>


	<?php
		if ( ! display_header_text() ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		else :
	?>
		h4.site-title{
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}
	<?php endif; ?>




	</style>
	<?php
}
endif;
