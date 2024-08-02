<section class="contact" style="background-image: url(<?php
                                                            $image_url = get_asset_image_url('background-contact.png');
                                                            if ($image_url) {
                                                                echo esc_url($image_url);
                                                            }
                                                            ?>">
    <div class="form-contact">
        <h1>Liên hệ tư vấn</h1>
        <p>Để lại địa chỉ liên hệ của bạn để chúng tôi liên hệ và 
            sẵn sàng giải đáp các thắc mắc của bạn liên quan tới các 
            dịch vụ và sản phẩm sản xuất:</p>
        <input  type="text" placeholder="Tên" />
        <input  type="number" placeholder="Số điện thoại của bạn" />
        <button>Gửi tới tư vấn <i class='bx bx-right-arrow-alt'></i></button>
    </div>
</section>