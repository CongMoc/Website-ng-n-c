<section class="products-category">
    <h2>Toàn bộ các danh mục sản phẩm của chúng tôi</h2>
    <div class="products-category-list">
        <div class="products-category-detail">
            <?php
            $image_url = get_asset_image_url('O-OngNongTron.jpg');
            if ($image_url) {
                echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
            }
            ?>
            <h2>Ống nước</h2>
            <p>2 sản phẩm</p>
        </div>
        <div class="products-category-detail">
            <?php
            $image_url = get_asset_image_url('pt-noi_thang_ren_trong.png');
            if ($image_url) {
                echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
            }
            ?>
            <h2>Phụ tùng cấp</h2>
            <p>19 sản phẩm</p>
        </div>
        <div class="products-category-detail">
            <?php
            $image_url = get_asset_image_url('ptt-tu_chac_45_chuyen_bac.jpg');
            if ($image_url) {
                echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
            }
            ?>
            <h2>Phụ tùng thoát</h2>
            <p>13 sản phẩm</p>
        </div>
    </div>
</section>