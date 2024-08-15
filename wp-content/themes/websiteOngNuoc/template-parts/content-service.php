<section class="service">
    <h2>Dịch vụ chất lượng uy tín</h2>
    <p>AQ luôn mong muốn được hợp tác với quý khách hàng để cùng nhau
        xây dựng những công trình bền vững, an toàn và hiệu quả. Dịch vụ của chúng tôi bao gồm:
    </p>
    <div class="service-detail">
        <div class="card factory">
            <h3>Cung Cấp Thiết Bị Vật Tư Công Nghiệp</h3>
            <p>Đa dạng các loại thiết bị vật tư công nghiệp từ các thương hiệu uy tín trên thế giới, đảm bảo đáp ứng mọi
                nhu
                cầu của khách hàng.</p>
            <?php
            $image_url = get_asset_image_url('service-1.png');
            if ($image_url) {
                echo '<img class="service-desktop" src="' . esc_url($image_url) . '" alt="Custom Image" />';
            }
            ?>

            <?php
            $image_url = get_asset_image_url('service-1-1.png');
            if ($image_url) {
                echo '<img class="service-mobile" src="' . esc_url($image_url) . '" alt="Custom Image" />';
            }
            ?>
        </div>
        <div class="card robot">
            <h3>Thiết kế, gia công các sản phẩm cơ khí</h3>
            <p>Nhờ đội ngũ kỹ sư cơ khí giàu kinh nghiệm, chúng tôi có thể thiết kế và gia công các sản phẩm cơ khí theo
                yêu
                cầu của khách hàng một cách chính xác và hiệu quả.</p>
            <?php
            $image_url = get_asset_image_url('service-2.png');
            if ($image_url) {
                echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
            }
            ?>

        </div>
        <div class="card tool">
            <h3>Thiết kế, thi công các hệ thống điện - tự động hóa, thiết bị công nghiệp</h3>
            <p>Dịch vụ thiết kế, thi công trọn gói các hệ thống điện - tự động hóa, thiết bị công nghiệp cho nhà máy, xí
                nghiệp.</p>
            <?php
            $image_url = get_asset_image_url('service-3.png');
            if ($image_url) {
                echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
            }
            ?>
        </div>
        <div class="card enginee">
            <h3>Cung cấp các gói dịch vụ bảo trì trong nhà máy</h3>
            <p>Đây là các gói dịch vụ bảo trì định kỳ và bảo trì theo yêu cầu cho các hệ thống điện - tự động hóa, thiết
                bị
                công nghiệp trong nhà máy.</p>
                <?php
            $image_url = get_asset_image_url('service-4.png');
            if ($image_url) {
                echo '<img class="service-desktop" src="' . esc_url($image_url) . '" alt="Custom Image" />';
            }
            ?>

            <?php
            $image_url = get_asset_image_url('service-4-1.png');
            if ($image_url) {
                echo '<img class="service-mobile" src="' . esc_url($image_url) . '" alt="Custom Image" />';
            }
            ?>
        </div>
    </div>
</section>