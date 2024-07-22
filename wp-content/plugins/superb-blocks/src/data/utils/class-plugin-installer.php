<?php

namespace SuperbAddons\Data\Utils;

defined('ABSPATH') || exit();

use SuperbAddons\Data\Utils\QuietSkin;

require_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
require_once(ABSPATH . 'wp-admin/includes/file.php');
require_once(ABSPATH . 'wp-admin/includes/misc.php');
require_once(ABSPATH . 'wp-admin/includes/plugin.php');
require_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');

class PluginInstaller
{
    public static function Install($plugin)
    {
        // Sanitize $plugin
        switch ($plugin) {
            case 'elementor':
                // Allowed
                $plugin_path = $plugin . '/' . $plugin . '.php';
                break;
            default:
                return false;
        }

        self::ActivatePlugin($plugin_path);
        if (\is_plugin_active($plugin_path)) {
            return true;
        }

        $plugins_api = \plugins_api(
            'plugin_information',
            array(
                'slug' => $plugin,
                'fields' => array(
                    'short_description' => false,
                    'sections' => false,
                    'requires' => false,
                    'rating' => false,
                    'ratings' => false,
                    'downloaded' => false,
                    'last_updated' => false,
                    'added' => false,
                    'tags' => false,
                    'compatibility' => false,
                    'homepage' => false,
                    'donate_link' => false,
                ),
            )
        );

        if (is_wp_error($plugins_api)) {
            return false;
        }

        $upgrader = new \Plugin_Upgrader(new QuietSkin());

        $installation_result = $upgrader->install($plugins_api->download_link);

        if (!$installation_result || is_wp_error($installation_result)) {
            return false;
        }

        self::ActivatePlugin($plugin_path);

        return true;
    }

    private static function ActivatePlugin($plugin_path)
    {
        if (file_exists(WP_PLUGIN_DIR . '/' . $plugin_path)) {
            \activate_plugin($plugin_path, '', false, true);
        }
    }
}
