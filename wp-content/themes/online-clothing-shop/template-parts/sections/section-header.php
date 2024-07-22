<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="custom-header" rel="home">
		<img src="<?php esc_url(header_image()); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr(get_bloginfo( 'title' )); ?>">
	</a>	
<?php endif;  ?>
<head>
	<script type="text/javascript">
	$(document).ready(function(){
		$("#formButton").click(function(){
			$("#form1").toggle();
		});
	});
 </script>
</head>

<!-- Header Area -->
	<?php 
		$stickyheader = esc_attr(onlineclothingshop_sticky_menu());
	?>
<div class="main">
    <header class="main-header site-header <?php echo esc_attr(onlineclothingshop_sticky_menu()); ?>">
		<div class="tophead ">
			<div class="container">
				<div class=" row">
					<div class="col-lg-8 col-md-8 col-sm-8">
						<div class="spbtn">
							<a href="<?php echo esc_html(get_theme_mod('topheader_topheadtext1link')); ?>">
								<?php echo esc_html(get_theme_mod('topheader_topheadtext1')); ?>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4">
						<div class="Ac_lgin">
						<!-- <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" >Sign In Or Join Now</a> -->
							<a href="<?php echo esc_html(get_theme_mod('topheader_topheadtext2link')); ?>">
								<?php echo esc_html(get_theme_mod('topheader_topheadtext2')); ?>

							</a> 
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header-section">
			<div class="container">
				<div class="headfer-content">
					<div class="row m-rl">
						<div class="col-lg-3 col-md-3 col-sm-4 col-3 pd-0">
							<div class="gen_derbtn">
								<a href="<?php echo esc_html(get_theme_mod('topheader_womenlink')); ?>">
	                            	<?php esc_html_e('Women | ','online-clothing-shop'); ?>
								</a>							
								<a href="<?php echo esc_html(get_theme_mod('topheader_menlink')); ?>">
	                            	<?php esc_html_e('Men','online-clothing-shop'); ?>
								</a>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-5 col-9 pd-0 logo-box">
							<div class="site-logo">
								<?php
								if(has_custom_logo())
									{	
										the_custom_logo();
									}
									else { 
								?>
								<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>">	
									<?php 
										echo esc_html(bloginfo('name'));
									?>
								</a>	
								<?php 						
									}
								?>
							</div>
							<div class="box-info">
								<?php
									$onlineclothingshop_site_desc = get_bloginfo( 'description');
									if ($onlineclothingshop_site_desc) : ?>
										<p class="site-description"><?php echo esc_html($onlineclothingshop_site_desc); ?></p>
								<?php endif; ?>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-4 col-12 pd-0 h_right">
							<?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) { ?>
							<li>
								<div class="top-form">
									<button type="button" id="formButton"></button>		
									<form id="form1">					
										<?php get_search_form(); ?>
									</form>
								</div>
							</li>
							<li>
								<a class="h-cart" href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" >
									<i class="fa fa-shopping-bag" ></i>
									<?php 
										
										$count = WC()->cart->cart_contents_count;
										$cart_url = wc_get_cart_url();
										if ( $count > 0 ) {
										?>
											<span><?php echo esc_html( $count ); ?></span>
										<?php 
										}
										else {
											?>
											<span><?php echo esc_html_e('0','online-clothing-shop'); ?></span>
											<?php 
										}
										
									?>
								</a>
							</li>
							<li>
								<a class="acc" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>">
									<i class="fa fa-user" aria-hidden="true"></i>
								</a>
							</li>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="btm-head row">
					<div class="menu">
						<!-- <div class="menu"> -->
							<button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal"  data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
								<span class="toggle-inner">
									<span class="toggle-icon">
										<i class="fa fa-bars"></i>
									</span>
								</span>
							</button><!-- .nav-toggle -->
							<div class="header-navigation-wrapper">

							<?php
							if ( has_nav_menu( 'primary_menu' ) || ! has_nav_menu( 'expanded' ) ) {
							?>

								<nav class="primary-menu-wrapper" aria-label="<?php echo esc_attr_x( 'Horizontal', 'menu', 'online-clothing-shop' ); ?>">

									<ul class="primary-menu reset-list-style">

									<?php
									if ( has_nav_menu( 'primary_menu' ) ) {

										wp_nav_menu(
											array(
												'container'  => '',
												'items_wrap' => '%3$s',
												'theme_location' => 'primary_menu',
											)
										);

									} elseif ( ! has_nav_menu( 'expanded' ) ) {

										wp_list_pages(
											array(
												'match_menu_classes' => true,
												'show_sub_menu_icons' => true,
												'title_li' => false,
												'walker'   => new OnlineClothingShop_Walker_Page(),
											)
										);

									}
									?>
									</ul>
								</nav><!-- .primary-menu-wrapper -->

							<?php } ?>
							</div><!-- .header-navigation-wrapper -->
							<?php
							// Output the menu modal.
							get_template_part( 'template-parts/sections/modal-menu' );
							?>
						<!-- </div> -->
					</div>
				</div>
			</div>
		</div>

    </header>
	<div class="clearfix"></div>
</div>

