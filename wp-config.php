<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'notcommerce_db' );

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
define( 'AUTH_KEY',         '$u&9-#vs.fG{>Cj *0x!&Ng!r$GwIZT]J0x_Hqy!e+%;_,?wdpxBQGO|6~_79j*9' );
define( 'SECURE_AUTH_KEY',  ']%#1@%3p8w{{@q!.]BM-yj-<k(xNeKx{c(uI=;UY3z<+YBa-6[P8,zaC<tyri-gs' );
define( 'LOGGED_IN_KEY',    '+35b_{{kec%ZE^,KBM.Y_LH>HSpxle=.LIS6/Nj,@2x2d6OV.9tg@oGULfgoH-B5' );
define( 'NONCE_KEY',        '/8Ut_umg(//&KuEC)7I/rYUu-_Ymqz{{1.S%1#I!)} r<>e/|Pgs}T7qr}[ ]?]v' );
define( 'AUTH_SALT',        'U@V[AZ|Qxbb<D/(mhi(s9J.`TP5aN0)6q^/Gp+=Jp*yjF5=N_mOoxlgR+@Gy/5?J' );
define( 'SECURE_AUTH_SALT', '#p%Z#W}tz>19Vl4$[sb=PCey]}g3;1BKAGF)&wY(h$YRxHj|LFn<lKHC41)%Ts3!' );
define( 'LOGGED_IN_SALT',   '%QW},D>c)XCrds1![VVkOFm#qA@iyQ=)vhfZu*]~v=wAQ-a<G`w%XJ/xw5i!lt`S' );
define( 'NONCE_SALT',       '$WfL3EaRSIWGS`!JxEMa^mtGW<#89>EZMJZ/zX`Ld#-%8mudGJ&w9I[r-m+.C17X' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
