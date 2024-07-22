<?php

namespace SuperbAddons\Admin\Pages;

defined('ABSPATH') || exit();

use SuperbAddons\Components\Admin\ContentBoxLarge;
use SuperbAddons\Components\Admin\PremiumBox;
use SuperbAddons\Components\Admin\ReviewBox;
use SuperbAddons\Components\Admin\SupportLinkBoxes;
use SuperbAddons\Elementor\Controllers\ElementorController;
use SuperbAddons\Library\Controllers\LibraryController;

class ElementorDashboardPage
{
    private $IsElementorCompatible;

    public function __construct()
    {
        add_action('admin_footer', array($this, 'LibraryTemplate'));
        $this->IsElementorCompatible = ElementorController::is_compatible();
        $this->Render();
    }

    public function LibraryTemplate()
    {
        LibraryController::InsertTemplates();
    }

    private function Render()
    {
        if (!$this->IsElementorCompatible) {
?>
            <div id="superbaddons-install-elementor-wrapper">
                <?php
                new ContentBoxLarge(
                    array(
                        "title" => __("We're sorry, but it appears that Elementor is not installed or activated on your website.", "superb-blocks"),
                        "description" => __("If you'd like to start using Elementor and the addons available for it, Elementor must first be installed. Once Elementor is installed and activated, you'll be able to take full advantage of all the features and benefits of Superb Addons for Elementor.", "superb-blocks"),
                        "image" => "asset-medium-elementor.jpg",
                        "icon" => "logo-elementor.svg",
                        "cta" => __("Install Elementor", "superb-blocks"),
                        "link" => "#",
                        "class" => 'superbaddons-admindashboard-elementor-box'
                    )
                );
                ?>
                <div class="superbaddons-spinner-wrapper" style="display:none;">
                    <img class="spbaddons-spinner" src="<?= SUPERBADDONS_ASSETS_PATH ?>/img/blocks-spinner.svg" />
                </div>
            </div>
        <?php
            return;
        }
        ?>
        <!-- Elementor Addons -->
        <div id="superbaddons-elementor-is-active-wrapper">
            <?php new ContentBoxLarge(
                array(
                    "title" => __("Elementor Addons", "superb-blocks"),
                    "description" => __("Unleash the full potential of Elementor with Superb Addons. Create pixel-perfect designs and take your website-building skills to the next level with our seamless integration that gives you access to 250 Elementor sections, elements. Unlock the potential to create visually stunning, high-converting websites in record time.", "superb-blocks"),
                    "image" => "asset-medium-elementor.jpg",
                    "icon" => "logo-elementor.svg",
                    "class" => 'superbaddons-admindashboard-elementor-box'
                )
            );
            ?>
        </div>
        <div id="spbaddons-admindashboard-library-wrapper" class="spbaddons-admindashboard-library-wrapper">
        </div>
        <div class="superbaddons-admindashboard-sidebarlayout">
            <div class="superbaddons-admindashboard-sidebarlayout-left">
                <!-- Link Boxes -->
                <div class="superbaddons-admindashboard-linkbox-wrapper">
                    <?php
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
