<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Online Clothing Shop
 */

get_header();
?>
<section class="blog-area inarea-blog-2-column-area three">
	<div class="container">
		<div class="row">
			<div class="<?php esc_attr(onlineclothingshop_post_layout()); ?>">
				<div class="row">
					<?php if( have_posts() ): ?>
				
						<?php while( have_posts() ) : the_post(); ?>
							<div class="col-lg-12">
								<?php get_template_part('template-parts/content/content','search'); ?>
							</div>
						<?php endwhile; 
						the_posts_navigation(); ?>
						
					<?php else: ?>
					
						<?php get_template_part('template-parts/content/content','none'); ?>
						
					<?php endif; ?>
				</div>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>	
<?php get_footer(); ?>
