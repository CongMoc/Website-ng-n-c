<?php 
/**
 * Template Name: Category Page
 * 
 * @package  WebsiteOngNuoc
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
            <div class="search-bar">
                <div class="search-bar-input">
                    <input type="text" placeholder="Từ khoá tìm kiếm">
                    <i class='bx bx-search' ></i>
                </div>
                <select>
                    <option value="">Danh mục sản phẩm</option>
                </select>
                <select>
                    <option value="">Địa điểm</option>
                    <option value="">Hà Nội</option>
                    <option value="">Bắc Giang</option>
                    <option value="">Hưng Yên</option>
                    <option value="">Hải Dương</option>
                    <option value="">Hải Phòng</option>
                    <option value="">Lào Cai</option>
                </select>
                    <button class="search-button">Tìm kiếm</button>
            </div>
                <?php  
                    $args = array(
                        'post_type' => 'product',
                        'posts_per_page' => 9,
                        'orderby' => 'date',
                        'order' => 'DESC',
                    );
                    
                    $loop = new WP_Query($args);
                    
                    if ($loop->have_posts()) {
                        echo '<div id="products-container" class="products-list">';
                        while ($loop->have_posts()) : $loop->the_post();
                            global $product;
                            ?>
                            <div class="product-item">
                                <div class="product-image">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php echo woocommerce_get_product_thumbnail(); ?>
                                    </a>
                                </div>
                                <div class="product-info">
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <p class="product-category"><?php echo wc_get_product_category_list($product->get_id()); ?></p>
                                    <div class="product-rating">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <p>4.8/5</p>
                                        <?php 
                                            echo wc_get_rating_html($product->get_average_rating()); 
                                        ?>
                                        <span>(<?php echo $product->get_review_count(); ?> reviews)</span>
                                    </div>
                                    <hr />
                                    <div class="product-location">
                                        <p><i class='bx bxs-location-plus'></i> Hải Phòng, Hà Nội</p>
                                    </div>
                                    <div class="product-availability">
                                        <p>Mức giá bán lẻ</p>
                                        <p>Giao hàng nhanh</p>
                                    </div>
                                    <div class="product-price">
                                        <p><?php echo $product->get_price_html(); ?></p>
                                        <a class="product-date">3 ngày</a>
                                    </div>
                                
                                </div>
                            </div>
                            <?php
                        endwhile;
                        echo '</div>';
                    } else {
                        echo __('No products found');
                    }
                    wp_reset_postdata();
                    ?>
                <button id="load-more">Tìm kiếm thêm</button>
                <div id="loading" style="display: none;">Đang tải...</div>
        </div>
    </div>
    <?php
        get_template_part('template-parts/content', 'contact');
    ?>
    <section class="">

    </section>
</section>

</div>
</div>
<script>
jQuery(document).ready(function($) {
    var page = 1;

    function fetchFilteredProducts(loadMore = false) {
        var selectedFilters = [];
        
        // Lấy giá trị của các checkbox được chọn
        $('.filter-checkbox:checked').each(function() {
            selectedFilters.push($(this).val());
        });

        $.ajax({
            url: "<?php echo admin_url('admin-ajax.php'); ?>",
            type: "POST",
            data: {
                action: 'filter_products',
                filters: selectedFilters,
                page: page
            },
            beforeSend: function() {
                $('#loading').show();
            },
            success: function(response) {
                if (loadMore) {
                    $('#products-container').append(response);
                } else {
                    $('#products-container').html(response);
                }
                $('#loading').hide();
            }
        });
    }

    // Gọi hàm fetchFilteredProducts mỗi khi có thay đổi trên checkbox
    $('.filter-checkbox').on('change', function() {
        page = 1; // Reset lại trang khi thay đổi bộ lọc
        fetchFilteredProducts();
    });

    // Gọi hàm fetchFilteredProducts khi nhấn nút "Tìm kiếm thêm"
    $('#load-more').on('click', function() {
        page++;
        fetchFilteredProducts(true);
    });

    // Tải sản phẩm ban đầu khi trang được load
    fetchFilteredProducts();
});


</script>
<?php get_footer(); ?>