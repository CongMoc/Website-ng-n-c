<?php 
/** 
 * funciton WebsiteOngNuoc
 * 
 * @package WebsiteOngNuoc
 */
function websiteOngNuoc_register_styles() {
    wp_enqueue_style('websiteOngNuoc-header', get_template_directory_uri() . "/assets/css/header.css", [], '1.0', 'all' );
    wp_enqueue_style('websiteOngNuoc-styles', get_template_directory_uri() . "/style.css", [], '1.0', 'all' );
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
                        <p>4.8/5</p>
                        <?php 
                            echo wc_get_rating_html($product->get_average_rating()); 
                        ?>
                        <span>(<?php echo $product->get_review_count(); ?> reviews)</span>
                    </div>
                    <hr />
                    <div class="product-location">
                        <p><?php
                            $image_url = get_asset_image_url('icon_location.png');
                            if ($image_url) {
                                echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
                            }
                        ?> Hải Phòng, Hà Nội</p>
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
                        <p>4.8/5</p>
                        <?php 
                            echo wc_get_rating_html($product->get_average_rating()); 
                        ?>
                        <span>(<?php echo $product->get_review_count(); ?> reviews)</span>
                    </div>
                    <hr />
                    <div class="product-location">
                        <p><?php
                            $image_url = get_asset_image_url('icon_location.png');
                            if ($image_url) {
                                echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
                            }
                        ?> Hải Phòng, Hà Nội</p>
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


function use_custom_template_for_product($template) {
    if (is_singular('product')) {
        global $post;
        $custom_template = locate_template('category-products-detail.php');
        
        if ($custom_template) {
            return $custom_template;
        }
    }
    
    return $template;
}
add_filter('template_include', 'use_custom_template_for_product');

function custom_product_permalink($permalink, $post) {
    if ($post->post_type == 'product') {
        return home_url('/category-products/?product_id=' . $post->ID);
    }
    return $permalink;
}
add_filter('post_type_link', 'custom_product_permalink', 10, 2);



function handle_message_form_submission() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['phone']) && isset($_POST['message'])) {
        $phone = sanitize_text_field($_POST['phone']);
        $message = sanitize_textarea_field($_POST['message']);

        // Admin email address
        $admin_email = get_option('admin_email');

        // Email subject
        $subject = 'Thông tin liên hệ từ khách hàng';

        // Email content
        $email_message = "Số điện thoại: $phone\nNội dung review:\n$message";

        // Headers
        $headers = array('Content-Type: text/plain; charset=UTF-8');

        wp_mail($admin_email, $subject, $email_message, $headers);

        echo '<p>Cảm ơn bạn đã gửi review! Chúng tôi sẽ phản hồi sớm nhất có thể.</p>';
    }
}

function handle_name_form_submission() {
    if ($_SERVER['REQUEST_URI'] === 'POST' && isset($_POST['phone']) && isset($_POST['name'])) {
        $phone = sanitize_text_field($_POST['phone']);
        $name = sanitize_textarea_field($_POST['name']);

        // Admin email address
        $admin_email = get_option('admin_email');

        // Email subject
        $subject = 'Thông tin liên hệ từ khách hàng';

        // Email content
        $email_message = "Tên khách hàng: $name\nSố điện thoại: $phone";

        // Headers
        $headers = array('Content-Type: text/plain; charset=UTF-8');

        wp_mail($admin_email, $subject, $email_message, $headers);

        echo '<p>Cảm ơn ' .$name. ' đã liên hệ! Chúng tôi sẽ phản hồi sớm nhất có thể.</p>';
    }
}


// Thêm vào một shortcode để hiển thị form trong trang hoặc bài viết
function contact_form_shortcode() {
    ob_start();
    handle_message_form_submission();
    ?>
    <form id="contact-form" method="POST">
        <label for="phone">Số điện thoại*</label>
        <input type="text" id="phone" name="phone" required>
        <label for="message">Nội dung reviews*</label>
        <textarea id="message" name="message" required></textarea>
        <button type="submit">Gửi liên hệ</button>
    </form>
    <?php
    return ob_get_clean();
}
add_shortcode('contact_form', 'contact_form_shortcode');



function contact_form_shortcode_name() {
    ob_start();
    handle_name_form_submission();
    ?>
    <form id="contact-name" method="POST" class="form-contact" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>">
        <h1>Liên hệ tư vấn</h1>
        <p>Để lại địa chỉ liên hệ của bạn để chúng tôi liên hệ và 
           sẵn sàng giải đáp các thắc mắc của bạn liên quan tới các 
           dịch vụ và sản phẩm sản xuất:</p>
        <input type="text" placeholder="Tên" id="name" name="name" required/>
        <input type="text" placeholder="Số điện thoại của bạn" id="phone" name="phone" required/>
        <button type="submit">Gửi liên hệ</button>
    </form>
    <?php
    return ob_get_clean();
}
add_shortcode('contact_name', 'contact_form_shortcode_name');



function ajax_add_to_cart() {
    $product_id = intval($_POST['product_id']);

    if ($product_id) {
        $added = WC()->cart->add_to_cart($product_id);

        if ($added) {
            wp_send_json_success();
        } else {
            wp_send_json_error('Could not add product to cart.');
        }
    } else {
        wp_send_json_error('Invalid product ID.');
    }
}

add_action('wp_ajax_add_to_cart', 'ajax_add_to_cart');
add_action('wp_ajax_nopriv_add_to_cart', 'ajax_add_to_cart');




