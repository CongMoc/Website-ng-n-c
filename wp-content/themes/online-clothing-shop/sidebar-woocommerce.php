<?php
/**
 * side bar template
 *
 * @package Online Clothing Shop
 */
?>
<?php if ( ! is_active_sidebar( 'online-clothing-shop-woocommerce-sidebar' ) ) {	return; } ?>
<div class="col-lg-4 pl-lg-4 my-5 order-0">
	<div class="sidebar">
		<?php dynamic_sidebar('online-clothing-shop-woocommerce-sidebar'); ?>
	</div>
</div>