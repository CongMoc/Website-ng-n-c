<?php

namespace SuperbAddons\Admin\Pages;

defined('ABSPATH') || exit();

use SuperbAddons\Admin\Controllers\DashboardController;
use SuperbAddons\Components\Admin\ContentBoxLarge;
use SuperbAddons\Components\Admin\PremiumBox;
use SuperbAddons\Components\Admin\ReviewBox;
use SuperbAddons\Components\Admin\SupportLinkBoxes;
use SuperbAddons\Gutenberg\Controllers\GutenbergController;
use SuperbAddons\Library\Controllers\LibraryController;

class GutenbergDashboardPage
{
    private $IsWordPressCompatible;

    public function __construct()
    {
        add_action('admin_footer', array($this, 'LibraryTemplate'));
        $this->IsWordPressCompatible = GutenbergController::is_compatible();
        $this->Render();
    }

    public function LibraryTemplate()
    {
        LibraryController::InsertTemplates();
    }

    private function Render()
    {
        if (!$this->IsWordPressCompatible) {
            new ContentBoxLarge(
                array(
                    "title" => __("We're sorry, but it looks like your WordPress version is outdated.", "superb-blocks"),
                    "description" => __("Superb Addons requires a newer version of WordPress to provide all of its features. We recommend updating WordPress to the latest version to take advantage of the latest security patches, bug fixes, and improvements. Once your WordPress version is up-to-date, you'll be able to use Superb Addons to its full potential and create stunning pages with ease.", "superb-blocks"),
                    "image" => "asset-medium-gutenberg.jpg",
                    "icon" => "logo-gutenberg.svg",
                    "cta" => __("Update WordPress", "superb-blocks"),
                    "link" => admin_url("update-core.php"),
                    "class" => 'superbaddons-admindashboard-gutenberg-image-box-large'
                )
            );
            return;
        }
?>
        <div id="superbaddons-gutenberg-is-active-wrapper">
            <!-- Gutenberg Addons -->
            <?php new ContentBoxLarge(
                array(
                    "title" => __("Gutenberg Addons", "superb-blocks"),
                    "description" => __("Unlock the true power of the WordPress editor with Superb Addons. Get access to blocks, section patterns and page content patterns for every type of website.", "superb-blocks"),
                    "image" => "asset-medium-gutenberg.jpg",
                    "icon" => "logo-gutenberg.svg",
                    "class" => 'superbaddons-admindashboard-gutenberg-image-box-large'
                )
            );
            ?>
        </div>
        <div id="spbaddons-admindashboard-library-wrapper" class="spbaddons-admindashboard-library-wrapper">
        </div>
        <div class="superbaddons-admindashboard-sidebarlayout">
            <div class="superbaddons-admindashboard-sidebarlayout-left">
                <!-- Editor Highlights -->
                <?php new ContentBoxLarge(
                    array(
                        "title" => __("Editor Highlights", "superb-blocks"),
                        "description" => __("Unlock the enhanced editor experience with grid systems, improved block control, and much more.", "superb-blocks"),
                        "image" => "editor-highlight.jpg",
                        "icon" => "purple-selection-plus.svg",
                        "cta" => __("Go to Posts", "superb-blocks"),
                        "link" => admin_url("edit.php"),
                        "class" => 'superbaddons-admindashboard-gutenberg-editor-highlights'
                    )
                );
                ?>
                <!-- Advanced custom CSS -->
                <?php new ContentBoxLarge(
                    array(
                        "title" => __("Advanced Custom CSS", "superb-blocks"),
                        "description" => __("Add custom CSS to your website with syntax highlight, custom display settings, and minified output.", "superb-blocks"),
                        "image" => "custom-css.jpg",
                        "icon" => "brackets-curly-duotone.svg",
                        "cta" => __("Go to Custom CSS", "superb-blocks"),
                        "link" => admin_url("admin.php?page=" . DashboardController::ADDITIONAL_CSS),
                        "class" => 'superbaddons-admindashboard-gutenberg-advanced-custom-css'
                    )
                );
                ?>
                <!-- Block controls -->
                <?php new ContentBoxLarge(
                    array(
                        "title" => __("Responsive Block Control", "superb-blocks"),
                        "description" => __("Our premium block control feature allows you to easily hide or show any blocks on desktop, tablet or mobile.", "superb-blocks"),
                        "image" => "block-control.jpg",
                        "icon" => "devices-duotone.svg",
                        "cta" => __("Go to Posts", "superb-blocks"),
                        "link" => admin_url("edit.php"),
                        "class" => 'superbaddons-admindashboard-gutenberg-block-control'
                    )
                );
                ?>
                <!-- Rating Block -->
                <?php new ContentBoxLarge(
                    array(
                        "title" => __("Rating Block", "superb-blocks"),
                        "description" => __("With this easy-to-use block, you can easily add your own ratings with bars and stars to your posts and pages. Simple to customize and style to match your website's look and feel.", "superb-blocks"),
                        "image" => "asset-medium-review.jpg",
                        "icon" => "purple-star.svg",
                        "cta" => __("Go to Posts", "superb-blocks"),
                        "link" => admin_url("edit.php"),
                        "class" => 'superbaddons-admindashboard-gutenberg-block-box'
                    )
                );
                ?>
                <!-- About the Author Block -->
                <?php new ContentBoxLarge(
                    array(
                        "title" => __("About the Author Block", "superb-blocks"),
                        "description" => __("Whether you're a blogger, journalist, or content creator, the Superb About the Author block is an essential tool for establishing your online presence and building a connection with your audience. Try it out and make your author bio stand out today!", "superb-blocks"),
                        "image" => "asset-medium-authorbox.jpg",
                        "icon" => "purple-identification-badge.svg",
                        "cta" => __("Go to Posts", "superb-blocks"),
                        "link" => admin_url("edit.php"),
                        "class" => 'superbaddons-admindashboard-gutenberg-block-box'
                    )
                );
                ?>
                <!-- Table of Contents Block -->
                <?php new ContentBoxLarge(
                    array(
                        "title" => __("Table of Contents Block", "superb-blocks"),
                        "description" => __("Automatically generates a list of headings and subheadings and makes it easy for your readers to navigate your content. Try it out and make your long-form content more accessible!", "superb-blocks"),
                        "image" => "asset-medium-tableofcontent.jpg",
                        "icon" => "purple-list-bullets.svg",
                        "cta" => __("Go to Posts", "superb-blocks"),
                        "link" => admin_url("edit.php"),
                        "class" => 'superbaddons-admindashboard-gutenberg-block-box'
                    )
                );
                ?>
                <!-- Recent Posts Block -->
                <?php
                $is_using_block_theme = function_exists("wp_is_block_theme") && wp_is_block_theme();
                new ContentBoxLarge(
                    array(
                        "title" => __("Recent Posts Block", "superb-blocks"),
                        "description" => __("Quickly add a customizable list of your latest posts to any page, post or widget space. The Superb Recent Posts block is a great tool for keeping your readers up-to-date with your latest content and driving traffic to your website.", "superb-blocks"),
                        "image" => "asset-medium-recentposts.jpg",
                        "icon" => "purple-note.svg",
                        "cta" =>  $is_using_block_theme ? __("Go to Editor", "superb-blocks") : __("Go to Widgets", "superb-blocks"),
                        "link" => $is_using_block_theme ? admin_url("site-editor.php") : admin_url("widgets.php"),
                        "class" => 'superbaddons-admindashboard-gutenberg-block-box superbaddons-admindashboard-gutenberg-block-box-recent-posts'
                    )
                );
                ?>
                <!-- Google Maps Block -->
                <?php new ContentBoxLarge(
                    array(
                        "title" => __("Google Maps Block", "superb-blocks"),
                        "description" => __("Easily integrate interactive Google Maps into any page, post, or widget space. Showcase your business location and beyond with this powerful and user-friendly tool.", "superb-blocks"),
                        "image" => "asset-large-superbmaps.jpg",
                        "icon" => "purple-pin.svg",
                        "cta" => __("Go to Posts", "superb-blocks"),
                        "link" => admin_url("edit.php"),
                        "class" => 'superbaddons-admindashboard-gutenberg-block-box superbaddons-admindashboard-gutenberg-block-box-maps'
                    )
                );
                ?>
                <!-- Animated Heading Block -->
                <?php new ContentBoxLarge(
                    array(
                        "title" => __("Animated Heading Block", "superb-blocks"),
                        "description" => __("Whether you're a blogger, business owner, or designer, this block is the perfect tool to enhance the visual appeal of your site. Elevate your content, boost user engagement, and make a lasting impression.", "superb-blocks"),
                        "image" => "asset-medium-animatedheading.jpg",
                        "icon" => "purple-heading.svg",
                        "cta" => __("Go to Posts", "superb-blocks"),
                        "link" => admin_url("edit.php"),
                        "class" => 'superbaddons-admindashboard-gutenberg-block-box superbaddons-admindashboard-gutenberg-block-box-animatedheading'
                    )
                );
                ?>
                <!-- Cover Image Block -->
                <?php new ContentBoxLarge(
                    array(
                        "title" => __("Cover Image Block", "superb-blocks"),
                        "description" => __("Create striking headers and hero sections effortlessly with this user-friendly block. Add captivating cover images to your pages and posts, grabbing your audience's attention from the get-go.", "superb-blocks"),
                        "image" => "asset-large-superbcover.jpg",
                        "icon" => "purple-image.svg",
                        "cta" => __("Go to Posts", "superb-blocks"),
                        "link" => admin_url("edit.php"),
                        "class" => 'superbaddons-admindashboard-gutenberg-block-box superbaddons-admindashboard-gutenberg-block-box-cover'
                    )
                );
                ?>
                <!-- Reveal Buttons Block -->
                <?php new ContentBoxLarge(
                    array(
                        "title" => __("Reveal Buttons Block", "superb-blocks"),
                        "description" => __("Quickly and effortlessly create reveal buttons, whether you're a seasoned pro or just starting out. Simply enter your button text, reveal text, and link. Users can then click the button to reveal the hidden text.", "superb-blocks"),
                        "image" => "asset-large-superbrevealbuttons.jpg",
                        "icon" => "purple-pointing.svg",
                        "cta" => __("Go to Posts", "superb-blocks"),
                        "link" => admin_url("edit.php"),
                        "class" => 'superbaddons-admindashboard-gutenberg-block-box superbaddons-admindashboard-gutenberg-block-box-reveal-buttons'
                    )
                );
                ?>
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
