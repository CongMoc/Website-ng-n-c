<section class="contact" style="background-image: url(<?php
                                                            $image_url = get_asset_image_url('background-contact.png');
                                                            if ($image_url) {
                                                                echo esc_url($image_url);
                                                            }
                                                            ?>">
   <?php echo do_shortcode('[contact_name]'); ?>
</section>