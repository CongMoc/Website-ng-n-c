<?php 
/**
 * Header template
 * 
 * @package WebsiteOngNuoc
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <?php
        wp_head();
    ?>

</head>

<body>

    <header class="header">
        <nav class="navbar">
            <div class="logo">
                <?php
					if(function_exists('the_custom_logo')) {
						$custom_logo_id = get_theme_mod('custom_logo');
						$logo = wp_get_attachment_image_src($custom_logo_id);
					}
				?>
                <img class="mb-3 mx-auto logo" src="<?php echo $logo[0] ?>" alt="logo">

            </div>
            <ul class="nav-links">
                <li><a href="" style="font-weight: bold;">Trang chủ</a></li>
                <li><a href="#">Giới thiệu</a></li>
                <li class="dropdown">
                    <a href="#">Danh mục <i class='bx bxs-down-arrow'></i></a>
                    <div class="dropdown-content">
                        <a href="#">Sản phẩm</a>
                        <a href="#">Comments của khách hàng khác</a>
                        <a href="#">Chính sách mua hàng</a>
                    </div>
                </li> 
                <li><a href="#">Tin tức</a></li>
                <li><a href="#">Liên hệ</a></li>
            </ul>
            <div class="call-button">
                <a href="#">Gọi điện</a>
            </div>
        </nav>
    </header>