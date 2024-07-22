<?php

namespace SuperbAddons\Admin\Pages;

defined('ABSPATH') || exit();

use SuperbAddons\Components\Admin\LinkBox;
use SuperbAddons\Components\Admin\ReviewBox;
use SuperbAddons\Admin\Controllers\DashboardController;
use SuperbAddons\Components\Admin\ContentBoxLarge;
use SuperbAddons\Components\Admin\PremiumBox;
use SuperbAddons\Components\Admin\SupportLinkBoxes;

class DashboardPage
{
    public function __construct()
    {
        $this->Render();
    }

    private function Render()
    {
?>
        <!-- Welcome Box -->
        <div class="superbaddons-admindashboard-content-box-large superbaddons-admindashboard-general-intro" style="background-image:url(<?= esc_url(SUPERBADDONS_ASSETS_PATH . '/img/asset-medium-dashboardheader.jpg'); ?>);">
            <div class="superbaddons-admindashboard-content-box-large-inner">
                <span class="superbaddons-element-text-sm superbaddons-element-text-800 superbaddons-element-text-dark">Hello, <?= esc_html(wp_get_current_user()->display_name); ?> 👋</span>
                <h2 class="superbaddons-element-text-lg superbaddons-element-text-800 superbaddons-element-text-dark"><?= esc_html__("Building Beautiful Websites Made Easy", "superb-blocks"); ?></h2>
                <p class="superbaddons-element-text-xxs superbaddons-element-text-gray">
                    <?= esc_html__("Supercharge your website and unlock new WordPress editor features, advanced custom CSS, patterns, blocks, themes and Elementor sections. No design or coding skills needed.", "superb-blocks"); ?>
                </p>
            </div>
        </div>

        <div class="superbaddons-admindashboard-sidebarlayout">
            <div class="superbaddons-admindashboard-sidebarlayout-left">
                <!-- Gutenberg Addons -->
                <?php new ContentBoxLarge(
                    array(
                        "title" => __("WordPress Addons", "superb-blocks"),
                        "description" => __("Unlock the true power of the WordPress editor with Superb Addons. Get access to blocks, section patterns and page content patterns for every type of website.", "superb-blocks"),
                        "image" => "illustration-cards-medium.jpg",
                        "icon" => "logo-gutenberg.svg",
                        "cta" => __("View WordPress Library", "superb-blocks"),
                        "link" => admin_url('admin.php?page=' . DashboardController::GUTENBERG_DASHBOARD),
                        "class" => 'superbaddons-admindashboard-dashboard-gutenberg-intro'
                    )
                );
                ?>
                <!-- Elementor Addons -->
                <?php
                new ContentBoxLarge(
                    array(
                        "title" => __("Elementor Addons", "superb-blocks"),
                        "description" => __("Unleash the full potential of Elementor with Superb Addons. Create pixel-perfect designs and take your website-building skills to the next level with our seamless integration that gives you access to 300+ Elementor sections and elements.", "superb-blocks"),
                        "image" => "elementor-illustration-cards-medium.jpg",
                        "icon" => "logo-elementor.svg",
                        "cta" => __("View Elementor Library", "superb-blocks"),
                        "link" => admin_url('admin.php?page=' . DashboardController::ELEMENTOR_DASHBOARD),
                        "class" => 'superbaddons-admindashboard-dashboard-elementor-intro'
                    )
                );
                ?>
                <!-- Link Boxes -->
                <div class="superbaddons-admindashboard-linkbox-wrapper">
                    <?php
                    new LinkBox(
                        array(
                            "icon" => "question.svg",
                            "title" => __("Help & Tutorials", "superb-blocks"),
                            "description" => __("We have put together detailed documentation that walks you through every step of the process, from installation to customization.", "superb-blocks"),
                            "cta" => __("View tutorials", "superb-blocks"),
                            "link" => admin_url('admin.php?page=' . DashboardController::SUPPORT),
                            "same_window" => true,
                        )
                    );
                    new LinkBox(
                        array(
                            "icon" => "purple-bulb.svg",
                            "title" => __("Request a feature", "superb-blocks"),
                            "description" => __("We're always looking for ways to improve Superb Addons. If you have a feature request or suggestion, we'd love to hear from you.", "superb-blocks"),
                            "cta" => __("Request feature", "superb-blocks"),
                            "link" => "https://superbthemes.com/feature-request/",
                        )
                    );
                    new SupportLinkBoxes();
                    ?>
                </div>
            </div>
            <div class="superbaddons-admindashboard-sidebarlayout-right">
                <?php
                new PremiumBox();
                new ReviewBox();
                ?>
            </div>
        </div>
<?php
    }
}
