<section id="featuredproduct-product-section" class="ht-section">
    <div class="container">
        <div class="featuredproduct-posts-box">
            <div class="row justify-content-center m-0">
                <div class="sec-titlebx">
                    <div class="section-title">
                        <h2><?php echo esc_html(get_theme_mod('featured_heading')); ?></h2>
                    </div>
                </div>  
            </div>
            <div class="row m-0">  
            <?php
				if(function_exists('woocommerce_template_loop_add_to_cart') && function_exists('WC')){
					$meta_query   = WC()->query->get_meta_query();
					$tax_query   = WC()->query->get_tax_query();
					$tax_query[] = array(
						'taxonomy' => 'product_visibility',
						'field'    => 'name',
						'terms'    => 'featured',
						'operator' => 'IN',
					);
					$args = array(
						'post_type'   =>  'product',
						'stock'       =>  1,
						'posts_per_page' => 8, 
						'orderby'     =>  'date',
						'order'       =>  'DESC',
						'meta_query'  =>  $meta_query,
						'tax_query'   => $tax_query,
					);
					$loop = new WP_Query( $args );
					if($loop->post_count > 0){
						while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                <div class="col-lg-4 col-md-6 col-sm-6 product-bx ">  
                    <div class="product-grid ">
                        <div class="product-image">
                            <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <?php if (has_post_thumbnail( $loop->post->ID )) 
                                echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
                                else
                                    echo '<img class="pic-1" src="'.get_template_directory_uri().'/assets/images/default.png" alt="Placeholder" />'; ?>
                            </a>
                        </div>
                        <div class="tag"></div>
                        <div class="productcontent-wrap">
                            <div class="pcontent">
                                <a class="add-to-cart" id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">    
                                    <h3><?php the_title(); ?></h3>
                                </a>
                                <span class="price">
                                    <?php
                                        $sale_price = $product->get_sale_price();
                                        if ($sale_price) {
                                            echo '<span class="sale-price">' . wc_price($sale_price) . '</span>';
                                        }
                                        $regular_price = $product->get_regular_price();
                                        echo '<span class="regular-price">' . wc_price($regular_price) . '</span>';
                                    ?>
                                </span>

                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div> 
                
                <?php
                    endwhile; 
                        } else { ?>
                    <div class="alert alert-warning text-center">
                        <strong><?php echo esc_html_e('Sorry, no new products to show.','online-clothing-shop'); ?></strong>
                    </div>
                    <?php
                            }
                            ?>
                    <?php
                }?>
            </div>  
        </div>
    <div class="clearfix"></div>
    </div>
</section>
