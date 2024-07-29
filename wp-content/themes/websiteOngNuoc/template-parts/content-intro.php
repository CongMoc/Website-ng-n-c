<?php 
    wp_head();
?>
<section class="introduct">
    <h2 class="left"><b>AQ MEP</b> tự hào là nhà cung cấp 
    <span style="color: #EAB200;">dịch vụ uy tín</span> trong <span style="color: #EAB200;">lĩnh vực xây dựng</span></h2>
    <?php
            $image_url = get_asset_image_url('intro-company.png');
            if ($image_url) {
                echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
            }
    ?>
    <p class="left">Công Ty TNHH Xây Dựng Và Dịch Vụ AQ tự hào là nhà cung cấp dịch vụ 
        uy tín trong lĩnh vực xây dựng tại Việt Nam. Với đội ngũ nhân viên 
        giàu kinh nghiệm, chuyên môn cao và tâm huyết, chúng tôi cam kết mang 
        đến cho khách hàng những giải pháp xây dựng tối ưu, chất lượng và hiệu quả nhất.
    </p>
    <div class="search-intro">
        <div class="search-intro-input">
            <i class='bx bx-search'></i>
            <input type="text" placeholder="Bạn đang tìm gì?">
        </div>
        <button type="submit">Search</button>
    </div>
</section>