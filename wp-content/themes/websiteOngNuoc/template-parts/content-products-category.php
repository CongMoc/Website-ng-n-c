<section class="products-category">
    <h2>Toàn bộ các danh mục sản phẩm của chúng tôi</h2>
    <div class="products-category-list">
        <?php
        // take all categories of products
        $categories = get_terms(array(
            'taxonomy' => 'product_cat',
            'hide_empty' => true, 
        ));

        foreach ($categories as $category) {
            $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
            $image_url = wp_get_attachment_url($thumbnail_id);
            $category_name = $category->name;
            $product_count = $category->count;
            ?>
            <div class="products-category-detail">
                <?php
                if ($image_url) {
                    echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($category_name) . '" />';
                }
                ?>
                <h2><?php echo esc_html($category_name); ?></h2>
                <p><?php echo esc_html($product_count); ?> sản phẩm</p>
            </div>
            <?php
        }
        ?>
    </div>
</section>