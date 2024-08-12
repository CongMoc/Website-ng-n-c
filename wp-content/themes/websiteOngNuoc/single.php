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
    <div class="posts">
        <div class="container-news">
            <section class="news-title">
				<p>Tin tức & Cập nhật</p>
                <h1><?php the_title();?></h1>
				<?php 
					the_tags('<span class="tag"><i class="fa fa-tag"></i>', '</span>
				<span class="tag"><i class="fa fa-tag"></i>', '</span>');
				?>
            </section>
            <section class="content-news">
                <div class="sidebar-news">
                    <div class="sidebar-header">
                        <h3>Chuyên đề nổi bật</h3>
                        <p><i class='bx bxs-receipt' ></i>Nước sạch</p>
                        <p>
                        <i class='bx bxs-receipt' ></i>Xây dựng
                        </p>
                        <p>
                        <i class='bx bxs-receipt' ></i>Đô thị
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
                <div class="blog-container">
                    <?php 
                    if (have_posts()) : 
                        while (have_posts()) : the_post(); 
                    ?>
                    <?php 
                        the_tags('<span class="tag"><i class="fa fa-tag"></i>', '</span>
                    <span class="tag"><i class="fa fa-tag"></i>', '</span>');
                    ?>
                        <div class="blog-detail">
                            <div class="author">
                                <h5><i class='bx bxs-user-circle'></i> <?php the_author(); ?></h5>
                                <p><i class='bx bxs-time-five'></i> <?php the_time('F j, Y'); ?></p>
                            </div>
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
                            <?php the_content(); ?>
                        </div>

                        <div class="blog-comments">
                            <h3>Comments</h3>
                            <div class="comments-section">
                                <?php
                                $comments = get_comments(array(
                                    'post_id' => get_the_ID(),
                                ));

                                if (!empty($comments)) {
                                    foreach ($comments as $comment) {
                                ?>
                                        <div class="comment-item">
                                            <div class="comment-author-avatar">
                                                <?php echo get_avatar($comment->comment_author_email, 48); ?>
                                                <div class="comment-author">
                                                    <h4><?php echo $comment->comment_author; ?></h4>
                                                    <p><?php echo get_comment_date('F j, Y', $comment); ?></p>
                                                </div>
                                            </div>
                                            <div class="comment-content">
                                                <p><?php echo $comment->comment_content; ?></p>
                                                <a href="#reply"><i class='bx bxs-share'></i> Reply</a>
                                            </div>
                                        </div>
                                <?php
                                    }
                                } else {
                                    echo '<p>No comments yet.</p>';
                                }
                                ?>
                            </div>
                        </div>

                    <?php 
                        endwhile; 
                    else: 
                        echo '<p>No posts found.</p>';
                    endif; 
                    ?>
                    <div class="comment-form-container">
                        <?php
                        $comments_args = array(
                            'title_reply' => 'Để lại comment của bạn', // Tiêu đề của form
                            'label_submit' => 'Gửi bình luận', // Nút gửi bình luận
                            'comment_notes_before' => '<p class="comment-notes">Thông tin liên hệ của bạn sẽ không được thể hiện.</p>',
                            'comment_field' => '<p><label for="comment">Comment *</label><textarea id="comment" name="comment" rows="8" required></textarea></p>',
                            'fields' => array(
                                'author' => '<p><label for="author">Tên của bạn *</label><input id="author" name="author" type="text" value="" required /></p>',
                                'email'  => '<p><label for="email">Địa chỉ email của bạn *</label><input id="email" name="email" type="email" value="" required /></p>',
                                'cookies' => '<p><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" /><label for="wp-comment-cookies-consent">Lưu lại để sử dụng lần sau</label></p>',
                            ),
                        );

                        comment_form($comments_args);
                        ?>
                    </div>
                    <div class="recent-blog">
                        <h2>Bài viết liên quan</h2>
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
                                        if ($counter <= 9) {
                                            continue; 
                                        }
                                ?>
                                    <div class="news-item">
                                        <img src="<?php the_post_thumbnail_url('') ?>" alt="Custom Image" />
                                        <div class="content-item">
                                            <a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a>
                                            <p><i class='bx bxs-user-circle'></i> <?php the_author(); ?></p>
                                            <p><i class='bx bxs-time-five' ></i> <?php the_time('F j, Y'); ?></p>
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