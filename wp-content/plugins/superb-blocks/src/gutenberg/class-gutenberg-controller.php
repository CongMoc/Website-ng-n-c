<?php

namespace SuperbAddons\Gutenberg\Controllers;

defined('ABSPATH') || exit();

use SuperbAddons\Admin\Controllers\SettingsController;
use SuperbAddons\Data\Controllers\CompatibilitySettingsOptionKey;
use SuperbAddons\Data\Controllers\RestController;
use SuperbAddons\Gutenberg\BlocksAPI\Controllers\DynamicBlockAssets;
use SuperbAddons\Gutenberg\BlocksAPI\Controllers\RecentPostsController;
use SuperbAddons\Library\Controllers\LibraryController;
use SuperbAddons\Library\Controllers\LibraryRequestController;

class GutenbergController
{
    const MINIMUM_WORDPRESS_VERSION = '5.8';
    const MINIMUM_PHP_VERSION = '5.6';

    const PATTERN_BLOCK_ARG = 'is_pattern_block';
    const BLOCKS = array(
        ['path' => "animated-heading", "args" => ['render_callback' => array(DynamicBlockAssets::class, 'EnqueueAnimatedHeader')]],
        ['path' => "author-box", "args" => []],
        ['path' => "ratings", "args" => []],
        ['path' => "table-of-contents", "args" => []],
        ['path' => "recent-posts", "args" => ['render_callback' => array(RecentPostsController::class, 'DynamicRender')]],
        ['path' => "cover-image", "args" => []],
        ['path' => "google-maps", "args" => []],
        ['path' => "reveal-buttons", "args" => []],
        ['path' => "reveal-button", "args" => ['render_callback' => array(DynamicBlockAssets::class, 'EnqueueRevealButton')]]
    );

    public function __construct()
    {
        if (!self::is_compatible()) {
            return;
        }

        add_action('block_categories_all', array($this, 'RegisterBlockCategory'), defined('PHP_INT_MAX') ? PHP_INT_MAX : 999, 2);
        add_action('init', array($this, 'RegisterBlocks'), 0);
        add_action('enqueue_block_editor_assets', array($this, 'EnqueueBlockEditorAssets'));

        add_action("enqueue_block_assets", array($this, 'EnqueueEditorIframeAssets'));
        add_action("wp_enqueue_scripts", array($this, 'EnqueuePatternAssets'));
        GutenbergEnhancementsController::Initialize();
    }

    public static function is_compatible()
    {
        // Check for required Elementor version
        if (version_compare(get_bloginfo('version'), self::MINIMUM_WORDPRESS_VERSION, '<')) {
            return false;
        }

        // Check for required PHP version
        if (version_compare(PHP_VERSION, self::MINIMUM_PHP_VERSION, '<')) {
            return false;
        }

        return true;
    }

    public static function GetGutenbergLibraryMenuItems()
    {
        return array(
            array(
                "id" => "patterns",
                "title" => esc_html__('Patterns', "superb-blocks"),
                "routes" => array(
                    "list" => LibraryRequestController::GUTENBERG_LIST_ROUTE . LibraryRequestController::GUTENBERG_ROUTE_TYPE_PATTERNS,
                    "insert" => LibraryRequestController::GUTENBERG_INSERT_ROUTE . LibraryRequestController::GUTENBERG_ROUTE_TYPE_PATTERNS
                ),
                "hidden" => false
            ),
            array(
                "id" => "pages",
                "title" => esc_html__('Pages', "superb-blocks"),
                "routes" => array(
                    "list" => LibraryRequestController::GUTENBERG_LIST_ROUTE . LibraryRequestController::GUTENBERG_ROUTE_TYPE_PAGES,
                    "insert" => LibraryRequestController::GUTENBERG_INSERT_ROUTE . LibraryRequestController::GUTENBERG_ROUTE_TYPE_PAGES
                ),
                "hidden" => false
            )
        );
    }

    public function EnqueuePatternAssets()
    {
        wp_register_style(
            'superb-addons-patterns',
            SUPERBADDONS_ASSETS_PATH . '/css/patterns.min.css',
            array(),
            SUPERBADDONS_VERSION
        );
        wp_enqueue_style(
            'superb-addons-patterns'
        );
    }

    public function EnqueueEditorIframeAssets()
    {
        global $pagenow;
        // Enqueues as block assets - check the current page to make sure we only enqueue on the site editor page and not on the frontend
        if ('site-editor.php' === $pagenow) {
            wp_enqueue_style(
                'superb-gutenberg-layout-library',
                SUPERBADDONS_ASSETS_PATH . '/css/layout-library-preview.min.css',
                array(),
                SUPERBADDONS_VERSION
            );
            // Enhancements
            wp_enqueue_style(
                'superb-addons-editor-enhancements',
                SUPERBADDONS_ASSETS_PATH . '/css/editor-enhancements.min.css',
                array(),
                SUPERBADDONS_VERSION
            );
            // Patterns
            $this->EnqueuePatternAssets();
        }
    }

    public function EnqueueBlockEditorAssets()
    {
        self::AddonsLibrary();
        self::EditorEnhancements();
        $this->EnqueuePatternAssets();
        wp_enqueue_script(
            'superb-addons-gutenberg-library',
            SUPERBADDONS_ASSETS_PATH . '/js/gutenberg/pattern-library.js',
            array("wp-plugins", "wp-hooks", "wp-data", "wp-element", "wp-i18n", "wp-components", "wp-compose", "wp-blocks", "wp-editor"),
            SUPERBADDONS_VERSION
        );
        wp_localize_script('superb-addons-gutenberg-library', 'superblayoutlibrary_g', array(
            "style_placeholder" => esc_html__('All themes', "superb-blocks"),
            "category_placeholder" => esc_html__('All categories', "superb-blocks"),
            "snacks" => array(
                "settings_save_message" => esc_html__("Settings saved successfully.", "superb-blocks"),
                "settings_save_error" => esc_html__("Something went wrong while attempting to save your settings. Please try again or contact support if the problem persists.", "superb-blocks"),
                "insert_error" => esc_html__('Something went wrong while attempting to insert this element. Please try again or contact support if the problem persists.', "superb-blocks"),
                "list_error" => esc_html__('Something went wrong while attempting to list elements. Please try again or contact support if the problem persists.', "superb-blocks")
            ),
            "menu_items" => self::GetGutenbergLibraryMenuItems(),
            "rest" => array(
                "base" => \get_rest_url(),
                "namespace" => RestController::NAMESPACE,
                "nonce" => wp_create_nonce("wp_rest")
            )
        ));
        wp_enqueue_style(
            'superb-addons-elements',
            SUPERBADDONS_ASSETS_PATH . '/css/framework.min.css',
            array(),
            SUPERBADDONS_VERSION
        );
        wp_enqueue_style(
            'superb-addons-font-manrope',
            SUPERBADDONS_ASSETS_PATH . '/fonts/manrope/manrope.css',
            array(),
            SUPERBADDONS_VERSION
        );
        wp_enqueue_style(
            'superb-gutenberg-editor-layout-library',
            SUPERBADDONS_ASSETS_PATH . '/css/layout-library-editor.min.css',
            array(),
            SUPERBADDONS_VERSION
        );
        wp_enqueue_style(
            'superb-gutenberg-layout-library',
            SUPERBADDONS_ASSETS_PATH . '/css/layout-library-preview.min.css',
            array(),
            SUPERBADDONS_VERSION
        );
        wp_enqueue_style(
            'superbaddons-js-snackbar',
            SUPERBADDONS_ASSETS_PATH . '/lib/js-snackbar.min.css',
            array(),
            SUPERBADDONS_VERSION
        );
        wp_enqueue_script('superb-addons-select2', SUPERBADDONS_ASSETS_PATH . '/lib/select2.min.js', array('jquery'), SUPERBADDONS_VERSION, true);
        wp_enqueue_style(
            'superbaddons-select2',
            SUPERBADDONS_ASSETS_PATH . '/lib/select2.min.css',
            array(),
            SUPERBADDONS_VERSION
        );

        wp_enqueue_script(
            'superbaddons-animated-heading',
            SUPERBADDONS_ASSETS_PATH . '/js/dynamic-blocks/animated-heading.js',
            [],
            SUPERBADDONS_VERSION,
            true
        );

        // Enhancements
        wp_enqueue_style(
            'superb-addons-editor-enhancements',
            SUPERBADDONS_ASSETS_PATH . '/css/editor-enhancements.min.css',
            array(),
            SUPERBADDONS_VERSION
        );

        /// Compatibility

        if (SettingsController::IsCompatibilitySettingRelevantAndEnabled(CompatibilitySettingsOptionKey::SPECTRA_BLOCK_SPACING)) {
            wp_enqueue_script(
                'superb-addons-block-spacing-compatibility-fix',
                SUPERBADDONS_ASSETS_PATH . '/js/compatibility/block-spacing.js',
                array('jquery'),
                SUPERBADDONS_VERSION,
                true
            );
        }
    }

    public function RegisterBlockCategory($block_categories, $block_editor_context)
    {
        return array_merge(
            array(
                array(
                    'slug'  => 'superb-addons-blocks',
                    'title' => __('Superb Addons', "superb-blocks"),
                ),
            ),
            $block_categories
        );
    }

    public function RegisterBlocks()
    {
        foreach (self::BLOCKS as $block) {
            if (isset($block['args'][self::PATTERN_BLOCK_ARG])) {
                $block['args']['category'] = 'superb-addons-blocks-patterns';
                unset($block['args'][self::PATTERN_BLOCK_ARG]);
            }
            register_block_type(SUPERBADDONS_PLUGIN_DIR . 'blocks/' . $block['path'], $block['args']);
        }
    }

    private static function EditorEnhancements()
    {
        add_action('admin_footer', function () {
            ob_start();
            include(SUPERBADDONS_PLUGIN_DIR . 'src/gutenberg/templates/block-quick-options.php');
            $template = ob_get_clean();
            echo '<script type="text/template" id="tmpl-gutenberg-superb-block-quick-options">' . $template . '</script>';
        });
    }

    public static function AddonsLibrary()
    {
        add_action('admin_footer', function () {
            ///// Buttons
            ob_start();
            include(SUPERBADDONS_PLUGIN_DIR . 'src/gutenberg/templates/library-button.php');
            $template = ob_get_clean();
            echo '<script type="text/template" id="tmpl-gutenberg-superb-library-button">' . $template . '</script>';
            //
            ob_start();
            include(SUPERBADDONS_PLUGIN_DIR . 'src/gutenberg/templates/pattern-tab-library-button.php');
            $template = ob_get_clean();
            echo '<script type="text/template" id="tmpl-gutenberg-superb-library-button-patternstab">' . $template . '</script>';
            //
            ob_start();
            include(SUPERBADDONS_PLUGIN_DIR . 'src/gutenberg/templates/appender-button.php');
            $template = ob_get_clean();
            echo '<script type="text/template" id="tmpl-gutenberg-superb-library-appender-button">' . $template . '</script>';
            ////// Library
            LibraryController::InsertTemplatesWithWrapper();
        });
    }

    public static function GutenbergDataImportAction($data)
    {
        if (!isset($data['content'])) {
            return $data;
        }

        $content = $data['content'];
        $content = preg_replace_callback("/(http)?s?:?(\/\/[^\"']*\.(?:png|jpg|jpeg|gif|png|webp))/", function ($matches) {
            // Get the URL
            $url = $matches[0];
            $basename = pathinfo($url, PATHINFO_BASENAME);
            $title = sanitize_title($basename);

            // Check if attachment exists based on the file slug
            $posts = get_posts(
                array(
                    'post_type'              => 'attachment',
                    'title'                  => $title,
                    'numberposts'            => 1,
                )
            );
            if (!empty($posts)) {
                // Return existing attachment URL
                $attachment = $posts[0];
                return wp_get_attachment_image_url($attachment->ID, 'full');
            }

            if (!function_exists('media_sideload_image')) {
                require_once(ABSPATH . 'wp-admin/includes/image.php');
                require_once(ABSPATH . 'wp-admin/includes/file.php');
                require_once(ABSPATH . 'wp-admin/includes/media.php');
            }

            // Create new attachment
            $attachment_id = \media_sideload_image($url, 0, $title, 'id');
            if (is_wp_error($attachment_id) || !is_numeric($attachment_id)) {
                // Return original URL if any error occurred
                return $url;
            }

            // Return new attachment URL
            return wp_get_attachment_image_url($attachment_id, 'full');
        }, $content);

        $data['content'] = $content;

        return $data;
    }
}
