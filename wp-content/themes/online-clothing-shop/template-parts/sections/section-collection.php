<section id="collection-section" class="ht-section">
    <div class="container">
        <div class="section-titlebx">
            <div class="section-title">
                <h2><?php echo esc_html(get_theme_mod('collection_heading')); ?></h2>
            </div>
        </div>

        <?php
        if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {
        ?>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php
                    $args = array(
                        'number'     => 0,
                        'orderby'    => 'title',
                        'order'      => 'ASC',
                        'hide_empty' => false,
                    );
                    $product_categories = get_terms('product_cat', $args);

                    if (!empty($product_categories)) {
                        foreach ($product_categories as $product_category) {
                            $thumbnail_id = get_term_meta($product_category->term_id, 'thumbnail_id', true);
                            $image = $thumbnail_id ? wp_get_attachment_url($thumbnail_id) : esc_html(get_template_directory_uri()) . '/assets/images/default.png';

                            echo '<div class="swiper-slide">';
                           
                            echo '<div class="pro-cat-img">';
                            echo '<a href="' . get_term_link($product_category) . '" data-hover="' . $product_category->name . '">';
                            echo '<img src="' . esc_url($image) . '" alt="' . esc_attr($product_category->name) . '" />';
                             echo '<div class="p_oly">'; echo '</div>';
                            echo '<div class="pro-cat-content">';
                            echo '<h5>';
                            echo '<a href="' . get_term_link($product_category) . '" target="_blank" data-hover="' . $product_category->name . '">';
                            echo '<span>' . esc_html($product_category->name) . '</span>';
                            echo '</a>';
                            echo '</h5>';
                            echo '</div>';
                            echo '</a>';
                            echo '</div>';
                            
                            
                            echo '</div>';
                        }
                    }
                    ?>
                </div>
                <div class="clearfix"></div>
            </div>
        <?php } ?>
    </div>
</section>