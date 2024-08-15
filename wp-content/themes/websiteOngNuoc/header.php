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
    <title><?php the_title(); ?></title>
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
                <a href="<?php bloginfo('url');?>">
                <img class="mb-3 mx-auto logo" src="<?php echo $logo[0] ?>" alt="logo">
                </a>
            </div>
            
            <?php 
                        wp_nav_menu(
                            array(
                                'theme_location' => 'header',
                                'menu_class' => 'nav-links',
                            )
                        )
                    ?>
            <div class="burger-menu dropdown" style="background-image: url(<?php
                $image_url = get_asset_image_url('icon_list.png');
                if ($image_url) {
                    echo esc_url($image_url);
                }
                ?>">

                <?php 
                    wp_nav_menu(
                        array(
                            'theme_location' => 'header',
                            'menu_class' => 'nav-mobile',
                        )
                    )
                ?>
            </div>
            
            <div class="call-button">
                <a href="#">Gọi điện</a>
            </div>
        </nav>
        <script>
           function toggleNavMobile() {
                var navMobile = document.querySelector('.burger-menu .menu-navbar-menus-container');
                
                // Kiểm tra nếu display đang là 'none'
                if (navMobile.style.display === 'none' || navMobile.style.display === '') {
                    navMobile.style.display = 'block'; // Chuyển thành block nếu đang là none
                } else {
                    navMobile.style.display = 'none'; // Ngược lại, ẩn nó đi
                }
            }

            // Gắn sự kiện onClick cho một phần tử
            document.querySelector('.burger-menu').addEventListener('click', toggleNavMobile);

        </script>
    </header>
