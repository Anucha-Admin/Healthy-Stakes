<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'healthy-stakes_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'fERTcX!.3C5Lqy&5h_TRYs^k@SS|(@@=0 ~xO8-B0@[SS3lSRQH0n Kcm!<t>LcU' );
define( 'SECURE_AUTH_KEY',  'R=Mst,jrciwEliVrntq$XmGOuLCU8epsXhNRTpgQy?Vn@UK^uNU3F#7f<KNQG#UK' );
define( 'LOGGED_IN_KEY',    '1Lp`4EdWN-?6#te!|[:OZE|T2pjcF9pd8y Nfem :(Cuyn:%8`uig3)O,/#|#Rk-' );
define( 'NONCE_KEY',        '<T:[JC~UB6)+W>a3W/D&svs;ulhd_Z IXi3Js8I_56b7}]$fWB~-Ux9mHjv_A@y2' );
define( 'AUTH_SALT',        'b2xJ6S%v=qH(dC<X[$r_Yk87r+B(=MpoT,zv)Z.4@=u~&mMGk;.0S +2;I;I)+@A' );
define( 'SECURE_AUTH_SALT', ')hd][x;~>osa}0in~GFI+VzE/)LZ<=^o> /.55mr9OE:*B?RR_]txB35N%fz@Em>' );
define( 'LOGGED_IN_SALT',   'x{9[DFEzE:w?7G-{(XpNQK)/Y!5Z]YjoM_;V<j./j_/v(:{w42V63n|f}0yF%ItE' );
define( 'NONCE_SALT',       'wH8lGUb)`WxC)fP5bcxb^z,up}Lw-5~+g-ME`3$vw|98L;1*;*pn6}~/aI1*ZmC#' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
