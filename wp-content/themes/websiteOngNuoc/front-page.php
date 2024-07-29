<?php 
	get_header();
?>
<div class="container">
    <div class="posts">
        <?php
            if (have_posts()) {
                get_template_part( 'template-parts/content', 'intro' );
            }
        ?>
    </div>
		</div>
<?php get_footer(); ?>