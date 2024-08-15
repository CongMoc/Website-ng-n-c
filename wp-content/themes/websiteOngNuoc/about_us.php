<?php 
/**
 * Template Name: About Us 
 * 
 * @package  WebsiteOngNuoc
 */
?>
<?php 
	get_header();
?>
<div class="container">
    <div class="posts">
        <section class="about-us">
            <div class="header-about-us">
                <h1  class="service-desktop">Giới thiệu về chúng tôi</h1>
                <!-- <?php
                $image_url = get_asset_image_url('background-about-us.png');
                if ($image_url) {
                    echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" onclick="plusSlides(1)"/>';
                }
                ?> -->
                <img class="service-desktop" src="<?php the_post_thumbnail_url('') ?>" alt="Custom Image" />
                <?php
                $image_url = get_asset_image_url('background-about_us.png');
                if ($image_url) {
                    echo '<img class="service-mobile" src="' . esc_url($image_url) . '" alt="Custom Image" onclick="plusSlides(1)"/>';
                }
                ?>
            </div>
        </section>
        <section class="content-about-us">
                <?php
                $image_url = get_asset_image_url('about-us.png');
                if ($image_url) {
                    echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" onclick="plusSlides(1)"/>';
                }
                ?>
                <div class="container-content">
                    <h1>Về chúng tôi</h1>
                    <div class="content-detail">
                        <a>01</a>
                        <p>Đội ngũ nhân viên của chúng tôi được đào tạo bài bản, có chuyên môn cao trong lĩnh vực xây dựng, đảm bảo mang đến cho khách hàng những giải pháp tối ưu và hiệu quả nhất.</p>
                    </div>
                    <div class="content-detail">
                        <a>02</a>
                        <p>Công Ty TNHH Xây Dựng Và Dịch Vụ AQ tự hào là nhà cung cấp dịch vụ uy tín trong lĩnh vực xây dựng tại Việt Nam, cung cấp cho khách hàng mức giá hợp lý, cạnh tranh trên thị trường.</p>
                    </div>
                    <div class="content-detail">
                        <a>03</a>
                        <p>Chúng tôi luôn sẵn sàng hỗ trợ khách hàng mọi lúc mọi nơi, giải đáp mọi thắc mắc của khách hàng một cách nhanh chóng và hiệu quả.</p>
                    </div>
                </div>
        </section>

        
        <section class="target-about-us" >
            <h1>Mục tiêu của chúng tôi</h1>
            <div class="target-content"  style="background-image: url(<?php
                                                            $image_url = get_asset_image_url('target.png');
                                                            if ($image_url) {
                                                                echo esc_url($image_url);
                                                            }
                                                            ?>">
                <div class="target-detail">
                    <a>01</a>
                    <p>Chúng tôi luôn báo giá chi tiết và rõ ràng cho khách hàng, để khách hàng có thể cân nhắc và lựa chọn dịch vụ phù hợp với nhu cầu và khả năng tài chính của mình.</p>
                </div>
                <div class="target-detail">
                    <a>02</a>
                    <p>Nhà cung cấp dịch vụ uy tín, chất lượng hàng đầu cho các vật liệu xây dựng tại VIệt Nam, đối tác tin cậy của khách hàng và người tiêu dùng</p>
                </div>
                <div class="target-detail">
                    <a>03</a>
                    <p>Chúng tôi luôn đặt chất lượng thi công lên hàng đầu, đảm bảo thi công đúng theo thiết kế, kỹ thuật và đảm bảo an toàn lao động.</p>
                </div>
            </div>
        </section>
        <section class="value-company">
            <h1>
                Giá trị của công ty
            </h1>

            <div class="value-content">
                <div class="value-detail">
                <?php
                $image_url = get_asset_image_url('value-1.png');
                if ($image_url) {
                    echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" onclick="plusSlides(1)"/>';
                }
                ?>
                <h3>Chính trực</h3>
                <p>Chúng tôi tin tưởng vào việc điều hành một
                    cách trung thực và minh bạch trong tất cả các 
                    giao dịch của mình, cả trong nội bộ lẫn với khách hàng
                     và đối tác của mình.</p>
                </div>
                <div class="value-detail active">
                <?php
                $image_url = get_asset_image_url('value-2.png');
                if ($image_url) {
                    echo '<img src="' . esc_url($image_url) . '" alt="Custom Image"/>';
                }
                ?>
                <h3>Sự đổi mới</h3>
                <p>Chúng tôi nỗ lực đổi mới trong mọi việc mình làm, tìm kiếm những cách thức mới và tốt hơn để giải quyết vấn đề cũng như cải tiến sản phẩm và dịch vụ của mình.</p>
                </div>
                <div class="value-detail">
                <?php
                $image_url = get_asset_image_url('value-3.png');
                if ($image_url) {
                    echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
                }
                ?>
                <h3>Khách hàng là trọng điểm</h3>
                <p>Chúng tôi tận tâm đặt nhu cầu của khách hàng lên hàng đầu và cung cấp dịch vụ và hỗ trợ ở mức cao nhất để giúp họ đạt được mục tiêu của mình.</p>
                </div>
                <div class="value-detail">
                <?php
                $image_url = get_asset_image_url('value-4.png');
                if ($image_url) {
                    echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
                }
                ?>
                <h3>Sự hợp tác</h3>
                <p>Chúng tôi coi trọng sự hợp tác và làm việc theo nhóm, nhận ra rằng chúng ta có thể cùng nhau đạt được nhiều thành tựu hơn là chỉ có thể đạt được một mình.</p>
                </div>
                <div class="value-detail">
                <?php
                $image_url = get_asset_image_url('value-5.png');
                if ($image_url) {
                    echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
                }
                ?>
                <h3>Cải tiến liên tục</h3>
                <p>Chúng tôi cam kết không ngừng học hỏi và cải tiến, luôn tìm cách phát triển và phát triển các kỹ năng, kiến ​​thức và năng lực của mình.</p>
                </div>
                <div class="value-detail">
                <?php
                $image_url = get_asset_image_url('value-6.png');
                if ($image_url) {
                    echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
                }
                ?>
                <h3>Sự tôn trọng</h3>
                <p>Chúng tôi tin vào việc đối xử với tất cả các cá nhân bằng sự tôn trọng và phẩm giá, đồng thời thúc đẩy sự đa dạng, công bằng và hòa nhập trong mọi khía cạnh công việc của chúng tôi.</p>
                </div>
                <div class="value-detail">
                <?php
                $image_url = get_asset_image_url('value-7.png');
                if ($image_url) {
                    echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
                }
                ?>
                <h3>Trách nhiệm</h3>
                <p>Chúng tôi chịu trách nhiệm về hành động của mình và chịu trách nhiệm về kết quả mà chúng tôi mang lại, cả với tư cách cá nhân và nhóm.</p>
                </div>
                <div class="value-detail">
                <?php
                $image_url = get_asset_image_url('value-8.png');
                if ($image_url) {
                    echo '<img src="' . esc_url($image_url) . '" alt="Custom Image"/>';
                }
                ?>
                <h3>Bền vững</h3>
                <p>Chúng tôi cam kết hoạt động có trách nhiệm với xã hội và môi trường, giảm thiểu tác động của chúng tôi lên hành tinh và hỗ trợ các hoạt động bền vững bất cứ khi nào có thể.</p>
                </div>
        </section>
        <section class="proud service-desktop" style="background-image: url(<?php
                                                            $image_url = get_asset_image_url('background-proud.jpg');
                                                            if ($image_url) {
                                                                echo esc_url($image_url);
                                                            }
                                                            ?>">
            <h1>
            Tự hào là <span>nhà cung cấp</span> dịch vụ uy tín trong lĩnh vực xây dựng tại Việt Nam.
            </h1>
            <a href="<?php bloginfo('url') ?> /contact">Liên hệ ngay</a>
        </section>
        <section class="proud service-mobile" style="background-image: url(<?php
                                                            $image_url = get_asset_image_url('background-about-us2.png');
                                                            if ($image_url) {
                                                                echo esc_url($image_url);
                                                            }
                                                            ?>">
            <h1>
            Tự hào là <span>nhà cung cấp</span> dịch vụ uy tín trong lĩnh vực xây dựng tại Việt Nam.
            </h1>
            <a href="<?php bloginfo('url') ?> /contact">Liên hệ ngay</a>
        </section>
    </div>
</div>
<?php get_footer(); ?>