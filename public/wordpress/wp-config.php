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
define('DB_USER', 'pi');

/** MySQL database password */
define('DB_PASSWORD', 'A90UM1Qo');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '2Vqo11)O[ja=$Z|mvRRGM!W_*y&VHZ6{&Yoz-Qae?5XW(Vn#T(V%94;n.zi/@&>(');
define('SECURE_AUTH_KEY',  'BXl$Qb6m{5}X_mmB+D]ET#ZkyKu_?DUM/|-%3|F?&0<mp{(#9pBOM51&LgYmWvhK');
define('LOGGED_IN_KEY',    'UcW;K.r3L[2:WP9~|hA,0ci|.8aGjmZw`{IsQ@-| LG3$o>D2#?kza91$|ZXQ#f<');
define('NONCE_KEY',        'eX6f@0 I*#_4!.|s{-RXSM)Pj/v5)rC8{5E>Np[CG5B`+bfW,2#L !ul-@s sE]>');
define('AUTH_SALT',        'gMRp .n&6LFP|@|6dxra!{-36q}`N33l-WsM d3mbpZN$&DL=(gb%z$vq&T2CA|0');
define('SECURE_AUTH_SALT', 'phA0oj/-Nw#:A=A.nLxV97{Sq2qd<H!I$=VK]BwCvBImEDi}@w{2Af@FR!~lDNm}');
define('LOGGED_IN_SALT',   'QcU.x( rGjh-&LJAZfnME^/I;Gi(2Gpx*h-G6U`peRH|OUM|H?t7g{>H|U-}uOV+');
define('NONCE_SALT',       'N8m`1Uu`RDlyA)2B5Zk-2=o/nmI(6E.!1!t6{EAkVaWd;jigzRDA/Wh>,9{QN:ld');

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
