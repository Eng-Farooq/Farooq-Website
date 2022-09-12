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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wbsite' );

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
define( 'AUTH_KEY',         '8 cr5)}X):9T%K-kRmMyB#7%+3of.JSiXiLc}3o:wDJ<W)>.6o3x_nSIgE}+c<$X' );
define( 'SECURE_AUTH_KEY',  'N&bQ_$HN4_I7vA<2#y*`Dl)A_ew!ro*n78R+H(Yz4G!Z`P2U3x#=4d%a%&PmJnY|' );
define( 'LOGGED_IN_KEY',    '|=C:7XB/G(]4v55HGw0quMp|ZE= }E;u#Wg;VJOWTlz4Ca]!E~K(MKb-h:hS5<Yj' );
define( 'NONCE_KEY',        'Z--CW;3NExz2Ly)MHX}xgUJz=%v`b#&0^G0p[+s!^I8=N@PZg.!OfUU;M@Ksk[8c' );
define( 'AUTH_SALT',        '7PAm[H-vtTx+Yv6v)b*Yv<?W47iKE@+:~?xZ)]V)pw`Whg9@R>AE(X<%hsz1Z>YU' );
define( 'SECURE_AUTH_SALT', 'n?4]F`(O@yvl&S/y }^1mY0LLZAY&qB8kn&2j>==_U<sCz>i,U/R0R/XU l8k_d ' );
define( 'LOGGED_IN_SALT',   '}AAqA<,K6gazH5O5,V8aM98Umm;57-Jk#LU3AbC13Fz`l)PwnHORaie1*i<dz= P' );
define( 'NONCE_SALT',       'SHWGoW4b-sJvK+YRBst9%J`{ep-hu%ysT,*WpE2Y]SSUR *uUClbACqo$o.K~^+f' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
