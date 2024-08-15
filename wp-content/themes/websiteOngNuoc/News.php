<?php 
/**
 * Template Name: News Page
 * 
 * @package  WebsiteOngNuoc
 */
?>
<?php 
	get_header();
?>
<div class="container">
    <div class="posts">
        <div class="container-news">
            <section class="header-news">
                <h1><?php the_title();?></h1>
                <img class="service-desktop" src="<?php the_post_thumbnail_url('') ?>" alt="Custom Image" />
                <?php
                $image_url = get_asset_image_url('background-post.png');
                if ($image_url) {
                    echo '<img class="service-mobile" src="' . esc_url($image_url) . '" alt="Custom Image" />';
                }
                ?>
            </section>
            <section class="content-news">
                <div class="sidebar-news service-desktop">
                    <div class="sidebar-header ">
                        <h3>Chuyên đề nổi bật</h3>
                        <p><?php
                                $image_url = get_asset_image_url('icon_paper.png');
                                if ($image_url) {
                                    echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
                                }
                            ?>Nước sạch</p>
                        <p>
                        <?php
                            $image_url = get_asset_image_url('icon_paper.png');
                            if ($image_url) {
                                echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
                            }
                        ?>Xây dựng
                        </p>
                        <p>
                        <?php
                            $image_url = get_asset_image_url('icon_paper.png');
                            if ($image_url) {
                                echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
                            }
                        ?>Đô thị
                        </p>
                    </div>
                    <div class="news-outstanding">
                        <h3>Bài viết nổi bật</h3>
                        <?php dynamic_sidebar('sidebar-news'); ?>
                    </div>
                    <div class="newsletter-form sidebar-header">
                        <p>Newsletter Sign Up Form</p>
                        <input type="text" placeholder="Enter your Email Address" />
                        <button>Subcribe</button>
                    </div>
                </div>
                <div class="outstanding">
                    <h1>Nổi bật</h1>
                    <div class="list-news">
                        <?php 
                            $blog_posts = new WP_Query(array(
                                'category_name' => 'blog', // Tên của category bạn muốn lấy post
                                'posts_per_page' => 3, // Số lượng post bạn muốn lấy, -1 nghĩa là lấy tất cả
                                'orderby' => 'date', // Sắp xếp theo ngày đăng
                                'order' => 'ASC', // Theo thứ tự tăng dần
                            ));

                            if ($blog_posts->have_posts()) : while ($blog_posts->have_posts()) : $blog_posts->the_post();
                        ?>
                            <div class="news-item">
                                <?php
                                    $image_url = get_asset_image_url('news.png');
                                    if ($image_url) {
                                        echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
                                    }
                                ?>
                                <div class="content-item">
                                    <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                                    <p> <?php
                                        // Lấy ảnh đại diện của tác giả
                                        echo get_avatar(get_the_author_meta('ID')); // Kích thước ảnh đại diện 32x32px
                                    ?><span><?php the_author(); ?></span></p>
                                    <p>Đăng ngày <?php the_time('F j, Y'); ?></p>
                                </div>
                            </div>
                        <?php 
                            endwhile; 
                            else: 
                                echo '<p>No posts found in the blog category.</p>'; // Thông báo nếu không có bài viết nào thuộc category "blog"
                            endif;  
                            wp_reset_postdata(); // Reset lại dữ liệu post
                        ?>
                    </div>
                    <div class="sidebar-news service-mobile">
                    <div class="sidebar-header ">
                        <h3>Chuyên đề nổi bật</h3>
                        <p><?php
                                $image_url = get_asset_image_url('icon_paper.png');
                                if ($image_url) {
                                    echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
                                }
                            ?>Nước sạch</p>
                        <p>
                        <?php
                            $image_url = get_asset_image_url('icon_paper.png');
                            if ($image_url) {
                                echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
                            }
                        ?>Xây dựng
                        </p>
                        <p>
                        <?php
                            $image_url = get_asset_image_url('icon_paper.png');
                            if ($image_url) {
                                echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
                            }
                        ?>Đô thị
                        </p>
                    </div>
                    <div class="news-outstanding">
                        <h3>Bài viết nổi bật</h3>
                        <?php dynamic_sidebar('sidebar-news'); ?>
                    </div>
                    <div class="newsletter-form sidebar-header">
                        <p>Newsletter Sign Up Form</p>
                        <input type="text" placeholder="Enter your Email Address" />
                        <button>Subcribe</button>
                    </div>
                </div>
                    <div class="recent-blog">
                        <h2>Recent</h2>
                        <div class="list-blog">
                                <?php 
                                // Bỏ qua 3 bài viết đầu tiên bằng cách giới hạn số lượng bài viết và sử dụng offset
                                $remaining_posts_asc = new WP_Query(array(
                                    'category_name' => 'blog', // Tên của category bạn muốn lấy post
                                    'posts_per_page' => -1, // Số lượng post bạn muốn lấy, -1 nghĩa là lấy tất cả
                                    'orderby' => 'date', // Sắp xếp theo ngày đăng
                                    'order' => 'ASC', // Theo thứ tự tăng dần
                                ));

                                if ($remaining_posts_asc->have_posts()) : 
                                    $counter = 0; // Biến đếm để đếm số lượng bài viết
                                    while ($remaining_posts_asc->have_posts()) : $remaining_posts_asc->the_post();
                                        $counter++; 
                                        if ($counter <= 3) {
                                            continue; 
                                        }
                                ?>
                                    <div class="news-item">
                                        <img src="<?php the_post_thumbnail_url('') ?>" alt="Custom Image" />
                                        <div class="content-item">
                                            <a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a>
                                            <p style="color: #222222;"><?php
                                                // Lấy ảnh đại diện của tác giả
                                                echo get_avatar(get_the_author_meta('ID')); // Kích thước ảnh đại diện 32x32px
                                            ?><span><?php the_author(); ?></p>
                                            <p> <?php
                                                $image_url = get_asset_image_url('icon_watch.png');
                                                if ($image_url) {
                                                    echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
                                                }
                                            ?> <span><?php the_time('F j, Y'); ?></span></p>
                                        </div>
                                    </div>
                                <?php 
                                    endwhile; 
                                else: 
                                    echo '<p>No posts found in the blog category.</p>'; // Thông báo nếu không có bài viết nào thuộc category "blog"
                                endif;  
                                wp_reset_postdata(); // Reset lại dữ liệu post
                                ?>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<?php get_footer(); ?>