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
		<div class="products-header">
			<h2>Toàn bộ các danh mục sản phẩm của AQ MEP</h2>
			<?php
			$image_url = get_asset_image_url('background-category-products.png');
			if ($image_url) {
				echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
			}
			?>
		</div>
		<div class="container-products">
			<div class="sidebar">
				<div class="filter-section">
					<h4>Giao hàng nhanh <i class='bx bxs-down-arrow'></i></h4>
					<ul>
						<li><input type="checkbox"> 1 ngày <span>(3,482)</span></li>
						<li><input type="checkbox"> Từ 3 ngày <span>(4,183)</span></li>
						<li><input type="checkbox"> Từ 7 ngày <span>(5,927)</span></li>
						<li><input type="checkbox"> Mọi lúc <span>(1,027)</span></li>
					</ul>
					<hr />
				</div>
				<div class="filter-section">
					<h4>Phân loại <i class='bx bxs-down-arrow'></i></h4>
					<ul>
						<li><input type="checkbox" class="filter-checkbox" value="ong"> Ống <span>(3)</span></li>
						<li><input type="checkbox" class="filter-checkbox" value="phu-tung-cap"> Phụ tùng cấp <span>(19)</span></li>
						<li><input type="checkbox" class="filter-checkbox" value="phu-tung-thoat"> Phụ tùng thoát <span>(13)</span></li>
					</ul>
					<hr />
				</div>
				<div class="filter-section">
					<h4>Địa điểm giao <i class='bx bxs-down-arrow'></i></h4>
					<div class="search-box">
						<input type="text" placeholder="Search">
					</div>
					<ul>
						<li><input type="checkbox"> Hà Nội <span>(3,482)</span></li>
						<li><input type="checkbox" checked> Bắc Giang <span>(3,482)</span></li>
						<li><input type="checkbox"> Hưng Yên <span>(3,482)</span></li>
						<li><input type="checkbox"> Hải Dương <span>(3,482)</span></li>
						<li><input type="checkbox"> Hải Phòng <span>(3,482)</span></li>
						<li><input type="checkbox"> Lào Cai <span>(3,482)</span></li>
					</ul>
					<hr />
				</div>
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
						<hr />
						<div class="price-display">5.000 - 3 Triệu đồng</div>
					</div>
				</div>
			</div>
			<div class="content-products">
				<div class="product-detail">
					<?php 
					if (isset($_GET['product_id'])) {
						$product_id = intval($_GET['product_id']);
						$product = wc_get_product($product_id);

						if ($product) {
							echo '<img src="' . wp_get_attachment_url($product->get_image_id()) . '" alt="' . $product->get_name() . '" />';
							echo '<div class="price-detail">
								<div class="product-location">
										<p><i class="bx bxs-location-plus"></i> Hải Phòng, Hà Nội</p>
									</div>
									<div class="product-availability">
										<p>Mức giá bán lẻ</p>
										<p>Giao hàng nhanh</p>
									</div>
									<div class="product-price">
										<p>' . $product->get_price_html() . '</p>
										<a class="product-date">3 ngày</a>
									</div> 
									<button>Đặt hàng ngay</button>
								</div>';
								echo '<hr />';
								echo '<div class="description-products"><h1>' . $product->get_name() . '</h1>';
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
		<?php
        	get_template_part('template-parts/content', 'contact');
    	?>
	</section>
    </div>
</div>
<?php get_footer(); ?>