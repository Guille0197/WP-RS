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
define( 'AUTH_KEY',          ';xKZ^T:w8u;)L[!L9}qWIwUE2ma~C)+50wPtc4)}Mf@+C#8G(J72Fz%Cd&Lt#~o<' );
define( 'SECURE_AUTH_KEY',   ',9V}DgMBhMsV3(s<MYxHQGU,)-[mK8QGx^5].,M)1~TWVV_i9&`xKs!ZFgBoppOu' );
define( 'LOGGED_IN_KEY',     '?_Z/LmrU=*Mv[/S3371UsWDD/ONL{:X0RgtP-xZkEKc0KqjZqcF2SZIUV]8@+LyD' );
define( 'NONCE_KEY',         'U:N03tLVYDqX9siRtT{AjVU0+3ji%0;y.7|QU)GqE}Ol!,Y0T=xnCR_xU0tmH!(e' );
define( 'AUTH_SALT',         '?z@G]u(^CuDb82yuYXP4^i@+U#0SgdtQ}Ed>[9LbNKExCpF{PVCS7gCsfj$L:6R(' );
define( 'SECURE_AUTH_SALT',  '2a|XU`bh{)PL1Nx#8G4Uar0Xke-lKE{fd8bI(M!}1qLg{V@)E/6yr{*yDIS]k+(Z' );
define( 'LOGGED_IN_SALT',    '}jHF>Zv4Wq{DM/|g9e2uK_aun{hNE&z1VncEyd_= qn7uq-|G|IvZH-J<s80K;6<' );
define( 'NONCE_SALT',        '6.dWPZ)-Il0`YfKB5kil)vsG.Xq(`$zUG<j9yKnW-W~)Fe.4 SU``?Q?A<</pLn+' );
define( 'WP_CACHE_KEY_SALT', 'T`+L?]N6zDr#as)qF?b>Qzoq+AKJ-T7Yf1%]a{JW/`vV937GLE%KdQ0s2Dc!<IfV' );


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
