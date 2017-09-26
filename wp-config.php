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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '#`(5YHna^[O %~4GZEG7=3vbyHJ5km%KHzldeKe6,?>me~%,O |l)f7HjU9E.@_)');
define('SECURE_AUTH_KEY',  'Yv*T_wxKCSkx]=YTL{R5vYtkDpO9QXE;Zo(*CVvaqxI2uJ)?[=BW,;R#*X:[V`(9');
define('LOGGED_IN_KEY',    'M^kKLh%Po#`+oeGyX{!Z kPn-DxW*;!!o*&n|6|O5RUhL@=K7;oY<E;(6;F?T+a/');
define('NONCE_KEY',        'az1U^_H;#6w+J&#Xs=U#k4y+e7j0Gp?lX~+)mi:BW;Fg2HhzB:S!_[k|sa(}cDK_');
define('AUTH_SALT',        'n}uIO%13l9&&zacfrPfo Y5bmf82Ec5~o ww{M`4@vrG@|^hI2Av7X>G0,u,2-uh');
define('SECURE_AUTH_SALT', ')z(27K`n{6vipNj _/UkYrKO.bzqFu14JTJ{:)&A]j_o~!F-n4i]hYe[]A1MN]3h');
define('LOGGED_IN_SALT',   'vznS]z5?%za,F[S@@[idc3zvq7[nI-<,(Du{HT._XZPQ#SK3~G|R!x4*5.pKGQ^y');
define('NONCE_SALT',       'ywk8}hXFQ97.^+hj>sU@ Td!-{g/~i+h8C:6_.cew7b+(:nb@2k_&:C>1Icfn :.');

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
