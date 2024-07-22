<?php 
	$onlineclothingshop_hs_breadcrumb					= get_theme_mod('hs_breadcrumb','1');
	$onlineclothingshop_breadcrumb_bg_img				= get_theme_mod('breadcrumb_bg_img');
	$onlineclothingshop_breadcrumb_back_attach		= get_theme_mod('breadcrumb_back_attach','scroll');
	
if($onlineclothingshop_hs_breadcrumb == '1') {	
?>	

	<!-- Slider Area -->   
	<?php if(!empty($onlineclothingshop_breadcrumb_bg_img)): ?>
    <section class="slider-area breadcrumb-section" style="background: url(<?php echo esc_url($onlineclothingshop_breadcrumb_bg_img); ?>) center center <?php echo esc_attr($onlineclothingshop_breadcrumb_back_attach); ?>; background-repeat: no-repeat; background-size: cover;">
	<?php else: ?>
	 <section class="slider-area breadcrumb-section">
	 <?php endif; ?>
        <div class="container">
            <div class="about-banner-text">   
            	
				<h1><?php onlineclothingshop_breadcrumb_title(); ?></h1>
				
				<ol class="breadcrumb-list">
					<?php onlineclothingshop_breadcrumbs(); ?>
				</ol>



            </div>
        </div> 

    </section>
    <!-- End Slider Area -->
<?php }else{  ?>
	<section style="padding: 30px 0 30px;"></section>
<?php } ?>	