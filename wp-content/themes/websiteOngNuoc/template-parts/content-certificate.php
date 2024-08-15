<section class="certificate" style="background-image: url(<?php
                                                            $image_url = get_asset_image_url('background-certificate.png');
                                                            if ($image_url) {
                                                                echo esc_url($image_url);
                                                            }
                                                            ?>">

    <div class="panner-company">
        <?php
        $image_url = get_asset_image_url('company.png');
        if ($image_url) {
            echo '<img class="icon-company" src="' . esc_url($image_url) . '" alt="Custom Image" />';
        }
        ?>
        <?php
        $image_url = get_asset_image_url('certificate.png');
        if ($image_url) {
            echo '<img class="certificate-image service-desktop" src="' . esc_url($image_url) . '" alt="Custom Image" />';
        }
        ?>

        <?php
        $image_url = get_asset_image_url('certificate1.png');
        if ($image_url) {
            echo '<img class="certificate-image service-mobile" src="' . esc_url($image_url) . '" alt="Custom Image" />';
        }
        ?>
        <?php
        $image_url = get_asset_image_url('company-images.png');
        if ($image_url) {
            echo '<img class="company-image" src="' . esc_url($image_url) . '" alt="Custom Image" />';
        }
        ?>
        <div class="certificate-content service-mobile">
            <h2>Chính sách mua bán và sản xuất của AQ luôn linh hoạt và được cập nhật nhanh nhất thị trường, kể cả trong lần
                đầu hợp tác</h2>
            <div class="certificate-event">
                <a href="http://localhost/wordpress/about-us/">Giới thiệu AQ</a>
                <a href="http://localhost/wordpress/contact/">Liên hệ</a>
            </div>
        </div>
    </div>

    <div class="certificate-content service-desktop">
        <h2>Chính sách mua bán và sản xuất của AQ luôn linh hoạt và được cập nhật nhanh nhất thị trường, kể cả trong lần
            đầu hợp tác</h2>
        <div class="certificate-event">
            <a href="http://localhost/wordpress/about-us/">Giới thiệu AQ</a>
            <a href="http://localhost/wordpress/contact/">Liên hệ</a>
        </div>
    </div>
</section>