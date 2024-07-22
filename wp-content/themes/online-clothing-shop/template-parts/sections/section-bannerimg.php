<section class="bannerimg-section">
    <div class="image">
        <?php 
            $bannerimgsection_image = get_theme_mod('bannerimgsection_image'); 

            if(!empty($bannerimgsection_image)){
                echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($bannerimgsection_image).'" class="peccular-bannerimg-imgboxshape" />';
            }else{
                echo '<img src="'.get_template_directory_uri().'/assets/images/bannerimg.png" />';
            }
        ?>                   
    </div>
</section>
