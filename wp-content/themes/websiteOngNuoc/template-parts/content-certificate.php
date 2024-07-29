<section class="certificate" style="background-image: url(<?php
                                                            $image_url = get_asset_image_url('background-contact.png');
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
            echo '<img class="certificate-image" src="' . esc_url($image_url) . '" alt="Custom Image" />';
        }
        ?>
        <?php
        $image_url = get_asset_image_url('company-images.png');
        if ($image_url) {
            echo '<img class="company-image" src="' . esc_url($image_url) . '" alt="Custom Image" />';
        }
        ?>
    </div>

    <div class="certificate-content">
        <h2>Chính sách mua bán và sản xuất của AQ luôn linh hoạt và được cập nhật nhanh nhất thị trường, kể cả trong lần
            đầu hợp tác</h2>
        <div class="certificate-event">
            <button>Giới thiệu AQ</button>
            <button>Liên hệ</button>
        </div>
    </div>
</section>