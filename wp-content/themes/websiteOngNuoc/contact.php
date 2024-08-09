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
                <h1><?php the_title();?></h1>
                <img src="<?php the_post_thumbnail_url('') ?>" alt="Custom Image" />
            </section>

            <section class="contact-input">
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
            </section>

            <section class="contact-info">
                <h2>Thông tin liên hệ</h2>
                <ul>
                    <li>
                        <p><i class='bx bx-mobile-landscape'></i> Số điện thoại</p>
                        <h5>123-456-7890</h5>
                    </li>
                    <li>
                        <p><i class='bx bxs-phone'></i> Hotline</p>
                        <h5>+123-456-7890</h5>
                    </li>
                    <li>
                        <p><i class='bx bx-envelope' ></i> Địa chỉ email</p>
                        <h5>hello@yourwebsite.com</h5>
                    </li>
                </ul>
            </section>

            </section>
    </div>
	
</div>
<?php get_footer(); ?>