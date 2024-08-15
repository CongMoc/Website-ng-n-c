<section class="news">
    <h2>Các tin tức mới nhất về xây dựng tại Việt Nam</h2>
    <div class="news-list">
        <?php
        // Truy vấn 3 bài post bất kỳ
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'DESC'  ,
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
                ?>
                <div class="new-detail">
                    <?php
                    // Lấy URL ảnh đại diện của bài post
                    if (has_post_thumbnail()) {
                        $image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                        echo '<img src="' . esc_url($image_url) . '" alt="' . get_the_title() . '" />';
                    }
                    ?>
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <div class="author">
                        <?php
                            // Lấy ảnh đại diện của tác giả
                            echo get_avatar(get_the_author_meta('ID')); // Kích thước ảnh đại diện 32x32px
                        ?>
                        <span><?php the_author(); ?></span>
                    </div>
                    <hr />
                    <div class="new-category">
                        <p>Phân loại</p>
                        <p><?php echo get_the_date('d F, Y'); ?></p>
                    </div>
                    <div class="new-category">
                        <h3>Mới nhất</h3>
                        <h3><?php echo get_the_date('d F, Y'); ?></h3>
                    </div>
                </div>
                <?php
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p>' . __('No posts found') . '</p>';
        endif;
        ?>
    </div>
    <a href="http://localhost/wordpress/news">Đọc thêm</a>
</section>