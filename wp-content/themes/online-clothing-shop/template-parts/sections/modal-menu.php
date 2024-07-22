<?php
/**
 * Displays the menu icon and modal
 *
 * @package WordPress
 * @subpackage Online_Clothing_Shop
 * @since Online Clothing Shop 1.0
 */

?>

<div class="menu-modal cover-modal header-footer-group" data-modal-target-string=".menu-modal">

	<div class="menu-modal-inner modal-inner">

		<div class="menu-wrapper section-inner">

			<div class="menu-top">

				<button class="toggle close-nav-toggle fill-children-current-color" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" data-set-focus=".menu-modal">
					<i class="fa fa-times" aria-hidden="true"></i>
				</button><!-- .nav-toggle -->

				<?php

				$mobile_menu_location = '';

				// If the mobile menu location is not set, use the primary_menu and expanded locations as fallbacks, in that order.
				if ( has_nav_menu( 'primary_menu' ) ) {
					$mobile_menu_location = 'primary_menu';
				} 

				if ($mobile_menu_location ) {
					?>

					<nav class="mobile-menu" aria-label="<?php echo esc_attr_x( 'Mobile', 'menu', 'online-clothing-shop' ); ?>">

						<ul class="modal-menu reset-list-style">

						<?php
						if ( $mobile_menu_location ) {

							wp_nav_menu(
								array(
									'container'      => '',
									'items_wrap'     => '%3$s',
									'show_toggles'   => true,
									'theme_location' => $mobile_menu_location,
								)
							);

						} else {

							wp_list_pages(
								array(
									'match_menu_classes' => true,
									'show_toggles'       => true,
									'title_li'           => false,
									'walker'             => new OnlineClothingShop_Walker_Page(),
								)
							);

						}
						?>

						</ul>

					</nav>

					<?php
				}
				?>

			</div><!-- .menu-top -->

		</div><!-- .menu-wrapper -->

	</div><!-- .menu-modal-inner -->

</div><!-- .menu-modal -->
