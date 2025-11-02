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
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'Yu`rlIbwR2nj1bQdh.[:8QYxjp$zs}1/W*[C=cdDQr338D$8s@8/[sWK{TeN_6qL' );
define( 'SECURE_AUTH_KEY',  'cA!=r Gu;#jN;z&e51Vomu-:3TZw0_W4hP?XvEg)]%Yn5o=rv{qu{T`,=AAJ_Q;p' );
define( 'LOGGED_IN_KEY',    'pu Ya)rg;oKm#DSY~ZlQ%]Yg[Zb}j^B@r(ED0ZkpnXYT%e[]9HcgaI-jTL/hM*^c' );
define( 'NONCE_KEY',        'U%LtIP(Fxh7S:-AYnJB4$&Q,U*[mY3jUH*=fH<<TeHM3TC$~,,L9$,ymqfBLN #!' );
define( 'AUTH_SALT',        '>.4cp0z?Pvz?:!R1qK6P/L;43eBd8sM+P5y:JpOw.B5}sA*A12n??]eoZu|&Uj(w' );
define( 'SECURE_AUTH_SALT', 'LmwH.e5L0?9Zg-I%5(SPDGq(DR/lo?Tej+]W{!&)>1hcLBiyS^!BOy[=9Qnu~4a=' );
define( 'LOGGED_IN_SALT',   'rZ@t}I%)cDEDG8*a;@C|s{b9PBPg]QKu.`&P|zoKt5:L4sA{N/7%BoW=-g2wYSAv' );
define( 'NONCE_SALT',       '|-~wujMgQh!PCK]jHczH9f-(o&^#OMA<uLG=}g$MQL!gv,((Z QjAd:1R9S P:C=' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
