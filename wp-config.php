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
define('DB_NAME', 'wordpressTest');

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
define('AUTH_KEY',         '__F(]D(!jhWUaA2n5K%]|PsIpzKN[#j}^9RRdqjR?_1Ma{mdlnY )md87Z;yT33,');
define('SECURE_AUTH_KEY',  ')sDA2OqF[Ck0OqP`ZsZ{HLAPT[`NGV:EZM]o2W4.DY-p_H,;tV&j|foStgv3Uh|3');
define('LOGGED_IN_KEY',    'l0Q*miVJ8k,$ZV.KAKBzDrK=(T0@m]j>S=+%atp0V7}#>-`ZI-*w-.`( ;0c}wvs');
define('NONCE_KEY',        '46XR#@Mxh_53~JLgIi-br%nfNx.ku2WH?hh*[NnB_A*~XM:O1z5zNf5lKI_P}Bdi');
define('AUTH_SALT',        '@Sq60Uid-_*3$[p+Wq{,B&oBWtwdgWzY&p=0UL7;HK!:Rv~;%wj01T,9A_.& $yw');
define('SECURE_AUTH_SALT', 'YHDd,rux:;De~d([aQRL8A.ea^`yqAEIN|7Rks,.T7k=E4><XmsaQB:k*&Hd{%^h');
define('LOGGED_IN_SALT',   '$(3KIoMJ}l4Z%8WD11gc2+%}bn+ SElpsK>fgL/z8B(e46@e!l}9)`w<iDmwZzR/');
define('NONCE_SALT',       'CI6%A%ke0Uv%E~t|NQ<2I]f1h3+]+uyvMU7GI;u0l-P/x,<qvQ78SHx-Z=ia7U80');

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
