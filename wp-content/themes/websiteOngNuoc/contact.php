<?php 
/**
 * Template Name: Contacts Us 
 * 
 * @package  WebsiteOngNuoc
 */

use Automattic\Jetpack\Forms\ContactForm\Contact_Form;

?>
<?php 
	get_header();
?>
<div class="container">
    <div class="posts">

    <div class="container-contact">
            <section class="header-contact">
                <h1 class="service-desktop"><?php the_title();?></h1>
                <img class="service-desktop" src="<?php the_post_thumbnail_url('') ?>" alt="Custom Image" />
                <?php
                $image_url = get_asset_image_url('background-contact1.png');
                if ($image_url) {
                    echo '<img class="service-mobile" src="' . esc_url($image_url) . '" alt="Custom Image" />';
                }
                ?>
            
            </section>


            <section class="contact">
                <div class="contact-input">
                    <h3>Liên hệ chúng tôi</h3>
                    <form method="post">
                        <label for="name">
                            Tên của tôi<span> *</span>
                        </label>
                        <input type="text" name="name" id="name" />
                        <label for="email">
                            Email<span> *</span>
                        </label>
                        <input type="text" name="email" id="email" />
                        <label for="content-contact">
                            Nội dung<span> *</span>
                        </label>
                        <textarea type="text" name="content-contact" id="content-contact"></textarea>
                        <button type="submit" name="submit">Liên hệ ngay</button>
                    </form>
                </div>

                <div class="contact-info">
                    <h2>Liên hệ với AQ</h2>
                    <ul>
                        <li>
                            <p><?php
                            $image_url = get_asset_image_url('icon_phone.png');
                            if ($image_url) {
                                echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
                            }
                        ?> Số điện thoại</p>
                            <h5>123-456-7890</h5>
                        </li>
                        <li>
                            <p><?php
                            $image_url = get_asset_image_url('icon_phone1.png');
                            if ($image_url) {
                                echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
                            }
                        ?>Hotline</p>
                            <h5>+123-456-7890</h5>
                        </li>
                        <li>
                            <p><?php
                            $image_url = get_asset_image_url('icon_letter.png');
                            if ($image_url) {
                                echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
                            }
                        ?> Địa chỉ email</p>
                            <h5>hello@yourwebsite.com</h5>
                        </li>
                    </ul>
                    <div class="contact-input-mobile">
                        <h3>Liên hệ chúng tôi</h3>
                        <form method="post">
                            <label for="name">
                                Tên của tôi<span> *</span>
                            </label>
                            <input type="text" name="name" id="name" />
                            <label for="email">
                                Email<span> *</span>
                            </label>
                            <input type="text" name="email" id="email" />
                            <label for="content-contact">
                                Nội dung<span> *</span>
                            </label>
                            <textarea type="text" name="content-contact" id="content-contact"></textarea>
                            <button type="submit" name="submit">Liên hệ ngay</button>
                        </form>
                    </div>
                </div>
            </section>
            <section class="map-company">
                <h2>Văn Phòng</h2>
                <div class="map">
                    <?php
                    $image_url = get_asset_image_url('map-1.png');
                    if ($image_url) {
                        echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
                    }
                    ?>
                    <div class="location">
                        <div class="location-detail">
                            <?php
                            $image_url = get_asset_image_url('location-1.jpg');
                            if ($image_url) {
                                echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
                            }
                            ?>
                            <div class="location-name">
                                <p>Miền Bắc</p>
                                <h5>123 Anywhere St., Any City, ST 12345</h5>
                            </div>
                        </div>
                        <div class="location-detail target-active">
                            <?php
                            $image_url = get_asset_image_url('location-2.jpg');
                            if ($image_url) {
                                echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
                            }
                            ?>
                            <div class="location-name">
                                <p>Miền Trung</p>
                                <h5>456 Anywhere St., Any City, ST 12345</h5>
                            </div>
                        </div>
                        <div class="location-detail">
                            <?php
                            $image_url = get_asset_image_url('location-3.jpg');
                            if ($image_url) {
                                echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
                            }
                            ?>
                            <div class="location-name">
                                <p>Miền Nam</p>
                                <h5>789 Anywhere St., Any City, ST 12345</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

    </div>
    </div>
	<script>
        document.addEventListener('DOMContentLoaded', function () {
        const locationDetails = document.querySelectorAll('.location-detail');
        const mapImage = document.querySelector('.map img');
        locationDetails.forEach((location, index) => {
            location.addEventListener('click', function () {
                locationDetails.forEach(loc => loc.classList.remove('target-active'));
                location.classList.add('target-active');
                if (index === 0) {
                    mapImage.src = '<?php echo esc_url(get_asset_image_url("map-2.png")); ?>';
                } else if (index === 1) {
                    mapImage.src = '<?php echo esc_url(get_asset_image_url("map-1.png")); ?>';
                } else if (index === 2) {
                    mapImage.src = '<?php echo esc_url(get_asset_image_url("map-3.png")); ?>';
                }
            });
        });
    });

    </script>
</div>
<?php get_footer(); ?>