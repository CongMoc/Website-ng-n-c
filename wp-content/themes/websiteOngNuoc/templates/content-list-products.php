<?php 
/**
 * Template Name: Product Detail
 * 
 * @package WooCommerce/Templates
 */
?>
<?php 
	get_header();
?>
<div class="container">
    <div class="posts">
	<section class="category-products">
		<div class="products-header-desktop">
			<h2>Toàn bộ các danh mục sản phẩm của AQ MEP</h2>
			<?php
			$image_url = get_asset_image_url('background-category-products.png');
			if ($image_url) {
				echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
			}
			?>
		</div>
		<div class="container-products">
			<div class="sidebar detail">
			<div class="sidebar-search">
            <?php
            $image_url = get_asset_image_url('icon_search.png');
            if ($image_url) {
                echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
            }
            ?>
            <input type="text" placeholder="Tìm kiếm...">
            </div>
            <div class="filter-section">
                <h4>Giao hàng nhanh 
                <?php
                    $image_url_bottom = get_asset_image_url('icon_bottom.png');
                    if ($image_url_bottom) {
                        echo '<img class="bottom" id="imgBottom1" src="' . esc_url($image_url_bottom) . '" alt="Expand Menu" onclick="toggleMenu(\'menuList1\', \'imgBottom1\', \'imgTop1\', true)"/>';
                    }

                    $image_url_top = get_asset_image_url('icon_top.png');
                    if ($image_url_top) {
                        echo '<img class="top" id="imgTop1" src="' . esc_url($image_url_top) . '" alt="Collapse Menu" onclick="toggleMenu(\'menuList1\', \'imgBottom1\', \'imgTop1\', false)" style="display:none;"/>';
                    }
                ?>
                </h4>
                <ul id="menuList1">
                    <li><input type="checkbox"> 1 ngày <span>(3,482)</span></li>
                    <li><input type="checkbox"> Từ 3 ngày <span>(4,183)</span></li>
                    <li><input type="checkbox"> Từ 7 ngày <span>(5,927)</span></li>
                    <li><input type="checkbox"> Mọi lúc <span>(1,027)</span></li>
                </ul>
                <hr />
            </div>

            <!-- Section 2: Phân loại -->
            <div class="filter-section">
                <h4>Phân loại 
                <?php
                    $image_url_bottom = get_asset_image_url('icon_bottom.png');
                    if ($image_url_bottom) {
                        echo '<img class="bottom" id="imgBottom2" src="' . esc_url($image_url_bottom) . '" alt="Expand Menu" onclick="toggleMenu(\'menuList2\', \'imgBottom2\', \'imgTop2\', true)"/>';
                    }

                    $image_url_top = get_asset_image_url('icon_top.png');
                    if ($image_url_top) {
                        echo '<img class="top" id="imgTop2" src="' . esc_url($image_url_top) . '" alt="Collapse Menu" onclick="toggleMenu(\'menuList2\', \'imgBottom2\', \'imgTop2\', false)" style="display:none;"/>';
                    }
                ?>
                </h4>
                <ul id="menuList2">
                    <li><input type="checkbox" class="filter-checkbox" value="ong"> Ống <span>(3)</span></li>
                    <li><input type="checkbox" class="filter-checkbox" value="phu-tung-cap"> Phụ tùng cấp <span>(19)</span></li>
                    <li><input type="checkbox" class="filter-checkbox" value="phu-tung-thoat"> Phụ tùng thoát <span>(13)</span></li>
                </ul>
                <hr />
            </div>

            <!-- Section 3: Địa điểm giao -->
            <div class="filter-section">
                <h4>Địa điểm giao 
                <?php
                    $image_url_bottom = get_asset_image_url('icon_bottom.png');
                    if ($image_url_bottom) {
                        echo '<img class="bottom" id="imgBottom3" src="' . esc_url($image_url_bottom) . '" alt="Expand Menu" onclick="toggleMenu(\'menuList3\', \'imgBottom3\', \'imgTop3\', true)"/>';
                    }

                    $image_url_top = get_asset_image_url('icon_top.png');
                    if ($image_url_top) {
                        echo '<img class="top" id="imgTop3" src="' . esc_url($image_url_top) . '" alt="Collapse Menu" onclick="toggleMenu(\'menuList3\', \'imgBottom3\', \'imgTop3\', false)" style="display:none;"/>';
                    }
                ?>
                </h4>
                <div class="search-box">
                    <input type="text" placeholder="Search">
                </div>
                <ul id="menuList3">
                    <li><input type="checkbox"> Hà Nội <span>(3,482)</span></li>
                    <li><input type="checkbox" checked> Bắc Giang <span>(3,482)</span></li>
                    <li><input type="checkbox"> Hưng Yên <span>(3,482)</span></li>
                    <li><input type="checkbox"> Hải Dương <span>(3,482)</span></li>
                    <li><input type="checkbox"> Hải Phòng <span>(3,482)</span></li>
                    <li><input type="checkbox"> Lào Cai <span>(3,482)</span></li>
                </ul>
                <hr />
            </div>

            <!-- Section 4: Mức giá bán lẻ -->
            <div class="filter-section">
                <h4>Mức giá bán lẻ</h4>
                <div class="price-range">
                    <div class="price-inputs">
                        <div>
                            <label for="min-price">Tối thiểu</label>
                            <input type="text" id="min-price" placeholder="5.000">
                        </div>
                        <div>
                            <label for="max-price">Tối đa</label>
                            <input type="text" id="max-price" placeholder="3.000.000">
                        </div>
                    </div>
                    <input type="range" min="5000" max="3000000" value="1000000" class="slider">
                    <div class="price-display">5.000 - 3 Triệu đồng</div>
                </div>
            </div>

            <a href="<?php get_search_template();?>">Tìm kiếm</a>
			</div>
			<div class="content-products">
				<div class="product-detail">
					<?php 
					if (isset($_GET['product_id'])) {
						$product_id = intval($_GET['product_id']);
						$product = wc_get_product($product_id);

						if ($product) {
							echo '<div class="description-products service-mobile"><h1>' . $product->get_name() . '</h1></div>';
							echo '<img src="' . wp_get_attachment_url($product->get_image_id()) . '" alt="' . $product->get_name() . '" />';
							echo '<div class="price-detail">
								<div class="product-location">
									<p>Hải Phòng, Hà Nội</p>
								</div>
								<div class="product-availability">
									<p>Mức giá bán lẻ</p>
									<p>Giao hàng nhanh</p>
								</div>
								<div class="product-price">
									<p>' . $product->get_price_html() . '</p>
									<a class="product-date">3 ngày</a>
								</div>';
								
							// Add to Cart button
							echo '<button class="add-to-cart-button" data-product-id="' . $product->get_id() . '">Đặt hàng ngay</button>';
							echo '<button><a href="http://localhost/wordpress/shop/" class="service-mobile">Quay lại tìm kiếm</a></button>';
							echo '</div>';
							echo '<hr />';
							echo '<div class="description-products"><h1 class="service-desktop">' . $product->get_name() . '</h1>';
							echo  $product->get_description() . '</div>';
						} else {
							echo '<p>' . __('Product not found') . '</p>';
						}
						
					} else {
						echo '<p>' . __('No product ID provided') . '</p>';
					}
					?>
				</div>
		
				<div class="rating-user">	
					<div class="rating">
						<h2>Đánh giá người dùng</h2>
						<p>Người tiêu dùng đánh giá sản phẩm</p>
						<?php dynamic_sidebar('sidebar-products') ?>
					</div>
					<?php echo do_shortcode('[contact_form]'); ?>
				</div>
		
			</div>
			
		</div>
		<div class="products-similarity">
			<h2>Sản phẩm tương tự liên quan</h2>
            <div class="products-list">
            <?php
            if ($product) {
                $related_products = wc_get_related_products($product->get_id(), 5);
                if (!empty($related_products)) {
                    foreach ($related_products as $related_id) {
                        $related_product = wc_get_product($related_id);
                        echo '<div class="product">';
                        echo '<img src="' . wp_get_attachment_url($related_product->get_image_id()) . '" alt="' . $related_product->get_name() . '" />';
                        echo '<h3><a href="' . get_permalink($related_product->get_id()) . '">' . $related_product->get_name() . '</a></h3>';
                        echo '<p>2,358 sản phẩm</p>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>' . __('No similar products found') . '</p>';
                }
            }
            ?>
			</div>
		</div>
		<div class="service-desktop">
		<?php
        	get_template_part('template-parts/content', 'contact');
    	?>
		</div>
	</section>
    </div>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$('.add-to-cart-button').on('click', function(e) {
				e.preventDefault();
				
				var product_id = $(this).data('product-id');
				
				$.ajax({
					url: '<?php echo esc_url(admin_url('admin-ajax.php')); ?>',
					type: 'POST',
					data: {
						action: 'add_to_cart',
						product_id: product_id,
					},
					success: function(response) {
						if (response.success) {
							alert('Product added to cart successfully!');
							// Optionally, update the cart count or redirect to the cart page
						} else {
							alert('Failed to add product to cart.');
						}
					},
					error: function() {
						alert('An error occurred. Please try again.');
					}
				});
			});
		});

		
		function toggleMenu(menuId, bottomImgId, topImgId, expand) {
			var menuList = document.getElementById(menuId);
			var imgBottom = document.getElementById(bottomImgId);
			var imgTop = document.getElementById(topImgId);

			if (expand) {
				menuList.style.height = "auto"; // Expand to fit content
				imgBottom.style.display = "none";
				imgTop.style.display = "inline";
			} else {
				menuList.style.height = "0"; // Collapse the menu
				imgTop.style.display = "none";
				imgBottom.style.display = "inline";
			}
		}

</script>

</div>
<?php get_footer(); ?>