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
                <div class="social-icons-mobile">
                    <a href="#"><?php
                        $image_url = get_asset_image_url('icon_facebook.png');
                        if ($image_url) {
                            echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
                        }
                        ?>
                    </a>
                    <a href="#"><?php
                        $image_url = get_asset_image_url('icon_youtube.png');
                        if ($image_url) {
                            echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
                        }
                        ?>
                    </a>
                    <a href="#"><?php
                        $image_url = get_asset_image_url('icon_linkedin.png');
                        if ($image_url) {
                            echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
                        }
                        ?>
                    </a>
                    <a href="#"><?php
                        $image_url = get_asset_image_url('icon_twitter.png');
                        if ($image_url) {
                            echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
                        }
                        ?>
                    </a>
                    <a href="#"><?php
                        $image_url = get_asset_image_url('icon_insta.png');
                        if ($image_url) {
                            echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
                        }
                        ?>
                    </a>
                </div>
                <h2>CÔNG TY TNHH XÂY DỰNG VÀ DỊCH VỤ AQ</h2>
                <ul>
                    <li>Địa chỉ: Thôn An Điềm, Xã Định Sơn, Huyện Cẩm Giàng, Tỉnh Hải Dương, Việt Nam</li>
                    <li>VPGD: 92 Nguyễn Lương Bằng, TP Hải Dương,Việt nam</li>
                </ul>
                <div class="social-icons">
                    <a href="#"><?php
                        $image_url = get_asset_image_url('icon_facebook.png');
                        if ($image_url) {
                            echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
                        }
                        ?>
                    </a>
                    <a href="#"><?php
                        $image_url = get_asset_image_url('icon_youtube.png');
                        if ($image_url) {
                            echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
                        }
                        ?>
                    </a>
                    <a href="#"><?php
                        $image_url = get_asset_image_url('icon_linkedin.png');
                        if ($image_url) {
                            echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
                        }
                        ?>
                    </a>
                    <a href="#"><?php
                        $image_url = get_asset_image_url('icon_twitter.png');
                        if ($image_url) {
                            echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
                        }
                        ?>
                    </a>
                    <a href="#"><?php
                        $image_url = get_asset_image_url('icon_insta.png');
                        if ($image_url) {
                            echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
                        }
                        ?>
                    </a>
                </div>
            </div>
            <div class="footer-section links service-desktop">
                <h4>Link Tắt</h4>
                <ul>
                    <li><a href="<?php bloginfo("url") ?>">Trang chủ</a></li>
                    <li><a href="<?php bloginfo("url") ?>/shop">Danh mục</a></li>
                    <li><a href="<?php bloginfo("url") ?> /about-us">Giới thiệu</a></li>
                    <li><a href="<?php bloginfo("url") ?> /news">Tin tức</a></li>                     
                    <li><a href="<?php bloginfo("url") ?> /contact">Liên hệ nhanh</a></li>
                    <li><a href="#">Để lại liên hệ</a></li>
                    <li><a href="#">Điều khoản</a></li>
                </ul>
            </div>
            <div class="footer-section links service-desktop">
                <h4>Nguồn</h4>
                <ul>
                    <li><a href="<?php bloginfo("url") ?> /news">Tin tức</a></li>
                    <li><a href="<?php bloginfo("url") ?> /contact">Liên hệ</a></li>
                </ul>
            </div>
            <div class="footer-section links service-desktop">
                <h4>Điều khoản</h4>
                <ul>
                    <li><a href="#">An toàn thông tin</a></li>
                    <li><a href="#">Bảo mật thông tin</a></li>
                </ul>
            </div>
         
            <div class="menus service-mobile">
                <div class="footer-section links">
                    <h4>Link Tắt</h4>
                    <ul>
                        <li><a href="<?php bloginfo("url") ?>">Trang chủ</a></li>
                        <li><a href="<?php bloginfo("url") ?>/shop">Danh mục</a></li>
                        <li><a href="<?php bloginfo("url") ?> /about-us">Giới thiệu</a></li>
                        <li><a href="<?php bloginfo("url") ?> /news">Tin tức</a></li>                     
                        <li><a href="<?php bloginfo("url") ?> /contact">Liên hệ nhanh</a></li>
                        <li><a href="#">Để lại liên hệ</a></li>
                        <li><a href="#">Điều khoản</a></li>
                    </ul>
                </div>
                <div class="service-mobile">
                    <div class="footer-section links">
                        <h4>Nguồn</h4>
                        <ul>
                            <li><a href="<?php bloginfo("url") ?> /news">Tin tức</a></li>
                            <li><a href="<?php bloginfo("url") ?> /contact">Liên hệ</a></li>
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
            </div>
        </div>
        <div class="footer-bottom">
            <p>AQ MEP Projects - © 2024 All Rights Reserved</p>
        </div>
    </footer>
</body>
</html>