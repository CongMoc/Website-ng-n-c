<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '|.xywPsJ^vJPYLI{+DTdMuQ[8>/oG@nK2R?qJzu+_6BxcetZsF-mhvul%XSIg>Dx' );
define( 'SECURE_AUTH_KEY',  '^uZT@^ELT@.5m)lTu%&bGCpXSFzjBHzmn,DdtSZ=@t[;1Eu*OC*wbDI iLs-7jB*' );
define( 'LOGGED_IN_KEY',    '.qe{;g9({ ^[@G[R*!WGHZ76gLH>Xdd6B56KA>hlGr6ZN%b-v-?>ROa}4/9= 7L)' );
define( 'NONCE_KEY',        'zwo^x?vF-V D;R&[Eq}Hp}BeI na`m@9ET-.X!e}.M<J[vW#K)$Z;+%;uU1z*v1[' );
define( 'AUTH_SALT',        'Du<|BO,I}@9(}i_8EmygnUW%7e<cLCJRbv: 3Z}|=f~QnxaQe2FSt+rpYTd:{-j@' );
define( 'SECURE_AUTH_SALT', 'zV7fE#{/ ;.yQ+x{3iEplA ^W[.~H$J-C_:VU{*]VmjZ_2eRT[.7t?>Yk%h~_/bb' );
define( 'LOGGED_IN_SALT',   'DgLt8j<#xv>u@f.&}}m@j`JR&Lz?Jcn8/:a}9Q Ln$8m96@!AJ!/@f&+j;>{r?!M' );
define( 'NONCE_SALT',       'vDx-wXWdSIzjuB!$]5=v_Yq{s#K&,ra13J8&o)P3HKf4S4}{TSJSxAKOcb+3yc!n' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
