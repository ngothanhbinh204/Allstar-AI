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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ')Q_HBh>.W{v<{l*>=HSr@;}9|SS.n4Wjd; p5Zjv>;=[DR)k5So1R=)+){s!<oKN' );
define( 'SECURE_AUTH_KEY',   'be@N|B4^&$HuNe&?W15!.;E~~6k_fiZu.LY5TP3R-GsdBl#Q!!Y5(E@Z7q~UZs:1' );
define( 'LOGGED_IN_KEY',     'r;OyV,7hZ#k,e62k4vhh?JV<<Xi1OB}s0bN(NwTw!S7XLo-{xV<XNB/U6= @wdDf' );
define( 'NONCE_KEY',         '|`*pN fGc1~.dvpp/_u_Qcn_(t.ce0M]#9*|$jXS0(zq1}JbHsIt8-VB3^bgqR0W' );
define( 'AUTH_SALT',         '/=m6a1cW_~r{[nHfsI:gbf+@Y+j4RpRlN3K btI[ O(w64ZbYb&~N=+!|v*Vi,1>' );
define( 'SECURE_AUTH_SALT',  'B5m&Sz,Ac;OkfG!Vb?uU~][>E$c3*b%&mtNRh(7a`bY}&8rq]T{l~@j#|h;xS^yx' );
define( 'LOGGED_IN_SALT',    ',l?h,|)#@s}+&4R.{m`5U`y@a;zK4-&nRAqmhoh;|)5Auef4TI9bmo}`i8_pLtY+' );
define( 'NONCE_SALT',        '(^z.~8Yk&k_NpGkcs[~(.Z >YP%bM!l9TQ*U3lhjXpePU@Bvukr{[bX,ObUpCZST' );
define( 'WP_CACHE_KEY_SALT', '_1P@f|[?vj^wc>_uuj /}&:t)S0H1y<7W_{]2P}SbB3x?;. .T/gB%oqbnMJ~BbC' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
