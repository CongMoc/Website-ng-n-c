<?php 
/**
 * Page template 
 * 
 * @package  WebsiteOngNuoc
 */
?>
<?php 
	get_header();
?>
<div class="container">
    < class="posts">
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
		</div>
		<?php 
			if(have_posts()) :while(have_posts()) : the_post() 
		?>
		<img src="<?php the_post_thumbnail_url(''); ?>" alt="<?php  the_title(); ?>" />
		<a href="<?php the_permalink(); ?>"><h1><?php the_title();?></h1></a>
		<div>
			<?php the_content();?>
			<?php comments_template(); ?>
		</div>
		<?php endwhile; else: endif;  ?>
	</section>
    </div>
</div>
<?php get_footer(); ?>