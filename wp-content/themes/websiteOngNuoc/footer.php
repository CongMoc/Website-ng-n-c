<?php 
/**
 * Footer template 
 * 
 * @package  WebsiteOngNuoc
 */
?>


<footer class="footer">
        <div class="footer-container">
            <div class="company-info">
                <?php
                $image_url = get_asset_image_url('logo_footer.png');
                if ($image_url) {
                    echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
                }
                ?>
                <h2>CÔNG TY TNHH XÂY DỰNG VÀ DỊCH VỤ AQ</h2>
                <ul>
                    <li>Địa chỉ: Thôn An Điềm, Xã Định Sơn, Huyện Cẩm Giàng, Tỉnh Hải Dương, Việt Nam</li>
                    <li>VPGD: 92 Nguyễn Lương Bằng, TP Hải Dương,Việt nam</li>
                </ul>
                <div class="social-icons">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-youtube'></i></a>
                    <a href="#"><i class='bx bxl-linkedin'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                </div>
            </div>
            <div class="footer-section links">
                <h4>Link Tắt</h4>
                <ul>
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Danh mục</a></li>
                    <li><a href="#">Giới thiệu</a></li>
                    <li><a href="#">Tin tức</a></li>                     
                    <li><a href="#">Liên hệ nhanh</a></li>
                    <li><a href="#">Để lại liên hệ</a></li>
                    <li><a href="#">Điều khoản</a></li>
                </ul>
            </div>
            <div class="footer-section links">
                <h4>Nguồn</h4>
                <ul>
                    <li><a href="#">Tin tức</a></li>
                    <li><a href="#">Liên hệ</a></li>
                </ul>
            </div>
            <div class="footer-section links">
                <h4>Điều khoản</h4>
                <ul>
                    <li><a href="#">An toàn thông tin</a></li>
                    <li><a href="#">Bảo mật thông tin</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>AQ MEP Projects - © 2024 All Rights Reserved</p>
        </div>
    </footer>
</body>
</html>