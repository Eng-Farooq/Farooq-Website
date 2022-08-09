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
define( 'DB_NAME', 'Myweb' );

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
define( 'AUTH_KEY',         'Xh&n kqVrk(^aNJv,@K{CEUizxhtPudUy&zZiiP-5_hp6Nh[?7JrNglvUBn@O6qy' );
define( 'SECURE_AUTH_KEY',  '8JYgTeRTcPHcMZ{|4EN`RX6%mF2Qa}P]v(X[dsi-|DV3<J<l*neoJgA<lxf5h>Z ' );
define( 'LOGGED_IN_KEY',    'vEQpK~78fTn[_[-GwdIA2W$U[M%(<_CNh&)ji*@j1]0Dn~;QOGc%T78<BB?y?T9T' );
define( 'NONCE_KEY',        'hDwQ~it*Sx;*T3>M<)gB;iDPBBDoCw3iA]MUW^3lNiI@yt)Fn6vwsQNxtxzR]lay' );
define( 'AUTH_SALT',        'm+)hJdF a>]zoU>gN3x]j/|,?W@0to/dCQn}mFi^$X|bw|l?0AslVd_K(mF_3<Cn' );
define( 'SECURE_AUTH_SALT', ':K00Qw$h[HB<$bnr^`:,e.-Q~c#VfrCY_H`R30.J+&i+ANu`F04<Qtv0pz7hGGFi' );
define( 'LOGGED_IN_SALT',   'B]yv|q*Ts#+q2uEUvD$T2<ryi4I#z2wwt.Z[d7T4^$BgDDEdQxdrt1WSaNK.%/kM' );
define( 'NONCE_SALT',       '4?;BZ#4nRnxC;?U9cmgVx&J2^^f^w1#h*/+d&1XdCXIscHHp~r%|(h=j`mzo56A6' );

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
