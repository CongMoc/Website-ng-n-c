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
	<img src="<?php the_post_thumbnail_url(''); ?>" alt="<?php  the_title(); ?>" />
	<h1><?php the_title(); ?></h1>
	<?php 
		if(have_posts()) :while(have_posts()) : the_post() 
	?>
	<a href="<?php the_permalink(); ?>"><h1><?php the_title();?></h1></a>
	<div>
		<?php the_excerpt();?>
        <?php comments_template(); ?>
    </div>
	<?php endwhile; else: endif;  ?>
	</div>
    </div>
</div>
<?php get_footer(); ?>