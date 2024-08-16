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
            <?php
                $image_url = get_asset_image_url('icon_search.png');
                if ($image_url) {
                    echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
                }
            ?>
            <input type="text" placeholder="Bạn đang tìm gì?">
        </div>
        <button type="submit">Tìm kiếm</button>
    </div>
    <div class="recommend_search left">
        <span style="color: #C4C4C4;">Phổ biến:</span>
        <span>Vật tư ống nước</span>
        <span>Van mềm</span>
        <span>Xây dựng nhà máy</span>
    </div>  
</section>
<section class="logo-contact">
    <div class="list-logo-contact">
        <?php
            $image_url = get_asset_image_url('logos_contact.png');
            if ($image_url) {
                echo '<img class="slideshow-logo" src="' . esc_url($image_url) . '" alt="Custom Image" />';
            }
        ?>

    </div>
    <?php
        $image_url = get_asset_image_url('icon_prev.png');
        if ($image_url) {
            echo '<img class="prev service-mobile" src="' . esc_url($image_url) . '" alt="Custom Image" />';
        }
    ?>
    <?php
        $image_url = get_asset_image_url('icon_next.png');
        if ($image_url) {
            echo '<img class="next service-mobile" src="' . esc_url($image_url) . '" alt="Custom Image" />';
        }
    ?>
</section>
<script>
    let currentPosition = 0;  // Vị trí ban đầu
    const totalSlides = 2;    // Số lần chuyển slide (ví dụ: chuyển 2 phần một lúc)
    const slideshow = document.querySelector('.slideshow-logo');
    const nextBtn = document.querySelector('.next');
    const prevBtn = document.querySelector('.prev');

    nextBtn.addEventListener('click', () => {
    currentPosition = Math.min(currentPosition + 2, totalSlides * 2 - 2); // Mỗi lần chuyển 2 phần
    updateSlide();
    });

    prevBtn.addEventListener('click', () => {
    currentPosition = Math.max(currentPosition - 2, 0);
    updateSlide();
    });

    function updateSlide() {
    slideshow.style.transform = `translateX(-${(currentPosition / (totalSlides * 2)) * 100}%)`;
    }


</script>