<?php 
/** 
 * funciton WebsiteOngNuoc
 * 
 * @package WebsiteOngNuoc
 */
function websiteOngNuoc_register_styles() {
    wp_enqueue_style('websiteOngNuoc-header', get_template_directory_uri() . "/assets/css/header.css", [], '1.0', 'all' );
    wp_enqueue_style('websiteOngNuoc-styles', get_template_directory_uri() . "/style.css", [], '1.0', 'all' );
    wp_enqueue_style('websiteOngNuoc-fontawesome', "https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css", array(), '5.13.0', 'all');
    wp_enqueue_style('websiteOngNuoc-footer', get_template_directory_uri() . "/assets/css/footer.css", [], '1.0', 'all' );
    wp_enqueue_style('websiteOngNuoc-home', get_template_directory_uri() . "/assets/css/home-page.css", [], '1.0', 'all' );
    wp_enqueue_style('websiteOngNuoc-category', get_template_directory_uri() . "/assets/css/category.css", [], '1.0', 'all' );
    wp_enqueue_style('websiteOngNuoc-about-us', get_template_directory_uri() . "/assets/css/about_us.css", [], '1.0', 'all' );
    wp_enqueue_style('websiteOngNuoc-contact', get_template_directory_uri() . "/assets/css/contact.css", [], '1.0', 'all' );
    wp_enqueue_style('websiteOngNuoc-news', get_template_directory_uri() . "/assets/css/news.css", [], '1.0', 'all' );

} 
add_action('wp_enqueue_scripts', 'websiteOngNuoc_register_styles');



function remove_jquery_migrate($scripts) {
    if (!is_admin() && isset($scripts->registered['jquery'])) {
        $script = $scripts->registered['jquery'];
        if ($script->deps) { // Check whether the script has any dependencies
            $script->deps = array_diff($script->deps, array('jquery-migrate'));
        }
    }
}
add_action('wp_default_scripts', 'remove_jquery_migrate');


function websiteOngNuoc_theme_support() {
    //Add dynamic title tag support 
    add_theme_support('custom-logo');   
    add_theme_support('WebsiteOngNuoc');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'websiteOngNuoc_theme_support');

register_nav_menus(
    array(
        'header' =>  'Navbar-menus',
    )
    );

if (!function_exists('get_asset_image_url')) {
    function get_asset_image_url($image_name) {
        return get_template_directory_uri() . '/assets/images/' . $image_name;
    }
}

register_sidebar(
    array(
        'name' => 'sidebar news',
        'id' => 'sidebar-news',
        'class' => '',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    )
);


register_sidebar(
    array(
            'name' => 'Sidebar Product',
            'id' => 'sidebar-products',
            'class' => '',
            'before_title' => '<h1>',
            'after_title' => '</h1>',
        )
);



add_action('woocommerce_before_shop_loop', 'custom_woocommerce_product_list', 20);
function custom_woocommerce_product_list() {
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => 10,
    );

    $loop = new WP_Query($args);

    if ($loop->have_posts()) {
        echo '<div class="custom-products-list">';
        while ($loop->have_posts()) : $loop->the_post();
            wc_get_template_part('content', 'product');
        endwhile;
        echo '</div>';
    }

    wp_reset_postdata();
}


function load_more_products() {
    $paged = $_POST['page'];
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => 9,
        'paged' => $paged,
        'orderby' => 'date',
        'order' => 'DESC',
    );

    $loop = new WP_Query($args);
    
    if ($loop->have_posts()) {
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
    } else {
        echo '';
    }
    
    wp_die(); // Để kết thúc AJAX
}
add_action('wp_ajax_load_more_products', 'load_more_products');
add_action('wp_ajax_nopriv_load_more_products', 'load_more_products'); 


function filter_products() {
    $filters = isset($_POST['filters']) ? $_POST['filters'] : array();
    $page = isset($_POST['page']) ? $_POST['page'] : 1;
    $posts_per_page = 9;

    $tax_query = array();

    if (!empty($filters)) {
        $tax_query[] = array(
            'taxonomy' => 'product_cat',
            'field' => 'slug',
            'terms' => $filters,
            'operator' => 'IN',
        );
    }

    $args = array(
        'post_type' => 'product',
        'posts_per_page' => $posts_per_page,
        'orderby' => 'date',
        'order' => 'DESC',
        'paged' => $page,
        'tax_query' => $tax_query,
    );

    $loop = new WP_Query($args);
    
    if ($loop->have_posts()) {
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
    } else {
        echo __('Không tìm thấy sản phẩm');
    }

    wp_die(); // Để kết thúc AJAX
}
add_action('wp_ajax_filter_products', 'filter_products'); 
add_action('wp_ajax_nopriv_filter_products', 'filter_products'); 
