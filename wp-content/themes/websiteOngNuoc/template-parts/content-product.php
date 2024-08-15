<section class="product-search">
    <h2>Sản phẩm có thể bạn cần tìm kiếm:</h2>
    <p>Các phụ kiện ngành nước có thể bạn đang tìm kiếm:</p>
    <div class="list-products-search">
        <?php  
                    $args = array(
                        'post_type' => 'product',
                        'posts_per_page' => 8,
                        'orderby' => 'date',
                        'order' => 'DESC',
                    ); 
                    $loop = new WP_Query($args);
                    
                    if ($loop->have_posts()) {
                        while ($loop->have_posts()) : $loop->the_post();
                            global $product;
                            ?>
                            <div class="product-rating" data-product-id="<?php echo $product->get_id(); ?>" >
                                <a href="<?php the_permalink(); ?>">
                                    <?php echo woocommerce_get_product_thumbnail(); ?>
                                </a>
                                <p><?php echo wc_get_product_category_list($product->get_id()); ?></p>
                                <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                <h5>200</h5>
                                <div class="rating-product">
                                    <?php
                                    $image_url = get_asset_image_url('icon_rating.png');
                                    if ($image_url) {
                                        echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
                                    }
                                    ?>
                                    <?php
                                    $image_url = get_asset_image_url('icon_rating.png');
                                    if ($image_url) {
                                        echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
                                    }
                                    ?>
                                    <?php
                                    $image_url = get_asset_image_url('icon_rating.png');
                                    if ($image_url) {
                                        echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
                                    }
                                    ?>
                                    <?php
                                    $image_url = get_asset_image_url('icon_rating.png');
                                    if ($image_url) {
                                        echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
                                    }
                                    ?>
                                    <?php
                                    $image_url = get_asset_image_url('icon_rating.png');
                                    if ($image_url) {
                                        echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
                                    }
                                    ?>
                                    <span>4.9/5</span>
                                </div>
                                <hr />
                                <button><a href="<?php the_permalink(); ?>"> Xem giá</a></button>
                                
                            </div>
                                <?php
                                    endwhile;
                                } else {
                                    echo __('No products found');
                                }
                                wp_reset_postdata();
                                ?>
                    
    </div>
    <a href="<?php bloginfo(); ?> /shop">Tìm kiếm thêm</a>
</section>