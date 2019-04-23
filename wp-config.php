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
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '>0ggO]C5G@Q){>]2SnUEW ;MEU1D52!uGjjw77Xq1-f5U|:*mwg*XCPez4jjW2Ov');
define('SECURE_AUTH_KEY',  'wjvEW8N92XJqj@kWlMEQ}AM0P}5}kJn/*hHP3[aia` [Z@B*:T{B8(MZsg>)!;ft');
define('LOGGED_IN_KEY',    'f6/t|M|)e$L:s1XC5A[u1Pd-)F&? syJke%7MGhO>Lc.qYPxq* FCWP4.;LD-^^3');
define('NONCE_KEY',        ')Mrf -- 6#i`=Z3S(!7~b?=T>q,Szck} til^u]?Aqk Mr`gzHT/zlqncNx,9&B8');
define('AUTH_SALT',        'f}-TMI+nX+4d%X`lgyinGx$1s4txoRM-%$x)~~d5zaxfY-S1h*ms6=;w7tp[_Pzc');
define('SECURE_AUTH_SALT', ',l*bX5o b,T7.#O6!6_lm2VP<IU$1)jTcqA+TKEz*C=UR;A~]t&R8(%rc+VE$/%s');
define('LOGGED_IN_SALT',   'TAOZU|,8M|r>4w9ljo:kcOkr}(%aGrC$XJ?2W.3%aM)7l~@ERZZ0Xhmc?fbBy&gm');
define('NONCE_SALT',       'y!txKpZw,<awB2py{>@I~0% w_LCwa;)u`,#DXx[eT*FuV>rqxMV{9#/c3{+<0GE');

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
