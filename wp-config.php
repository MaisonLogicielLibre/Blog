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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mll_blog');

/** MySQL database username */
define('DB_USER', 'mllAdmin');

/** MySQL database password */
define('DB_PASSWORD', 'Vb4qSQoe');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'OA?lZ[ ME[{N_T,@fEb0<`h|30=bwJx:H}os_tu>!1z:],8^vzP5gQbT$a5Ybrq:');
define('SECURE_AUTH_KEY',  'B~2)pzs(uH&f#EUb1yVnSrw*[li3.dps,@K=B1vz=.x}S0DP0fz7GN:%@y(I/+%a');
define('LOGGED_IN_KEY',    '/rJj*^ABLvzqp:6cvtwn]?M6H#gtS|pvD}xZstN,{rzG[7}E@UV^uKRSb4V||aG{');
define('NONCE_KEY',        'wN=P:;fZ_F.,G^8G<*Ds$It*O+=zq>`]v9(Ja3X@NZC&11U> Pu-o:3mMGO9jk-i');
define('AUTH_SALT',        ' tH.1j3ce/E!;6mrkxB/w6:=#7_L`{jy]viv_Q<^|/5+Dc7Y*f_Xs7?ZRj-Iwr|S');
define('SECURE_AUTH_SALT', 'wa-g|e0-E%[:j+L-4()&0^VqIx.3wx&D%_YY/r;hfUa<F:1,nI|%2+OW`)>qgf>-');
define('LOGGED_IN_SALT',   'F^t6H4`s?uS(0!V=_iPY7hS5/AOVTj2v?NT,CX3-k~8^Ml6Z3/k`s aG}o2~0 ry');
define('NONCE_SALT',       '+-Zg|fsk:bYYA:)H`iO&lY3^IFyc(_%q?Bs?,aD`4}>-td):8&F@?bbjg2B5aH/,');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
