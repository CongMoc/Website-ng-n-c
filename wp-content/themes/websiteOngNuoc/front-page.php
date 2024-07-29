<?php
get_header();
?>
<div class="container">
    <div class="posts">
        <?php
        if (have_posts()) {
            get_template_part('template-parts/content', 'intro');
            get_template_part('template-parts/content', 'service');
            get_template_part('template-parts/content', 'product');
            get_template_part('template-parts/content', 'certificate');
            get_template_part('template-parts/content', 'products-category');
        }
        ?>
    </div>
</div>
<?php get_footer(); ?>