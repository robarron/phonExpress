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
define('DB_NAME', 'phonexpress');

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
define('AUTH_KEY',         '4W9I)6L NA_royO :(z~QCQYS}7?X~Ud0_q6]g[ R$6^F8E 55</A!Wxc7GHyFzh');
define('SECURE_AUTH_KEY',  'v-ex6= o<zdpNEMj>&~&msT4%m~rpMcVDkD[]eZt{y!%]ZBTD)1GF>[o:rE1M2PR');
define('LOGGED_IN_KEY',    'PRNSw~gdci{rc+s2w@H3q,1i1jMC@zCkTG_m79}o*^4F+hS?VJy?j[Sn7{Am:a/~');
define('NONCE_KEY',        'UOaduBA|`8.sYJlHry[#jQfDAVBruB,3g,lK53`@%!%Gk(`~$00y:M|ZV?=LH>h{');
define('AUTH_SALT',        'Tu;8M6s)rysq):ut>|J8hYtGF+{$VA<,0#FJ@#V<*61ZFC-ZKB:u;CdmYnNHb22>');
define('SECURE_AUTH_SALT', 'QuHwDzgQUS_G;t<Rt|(ht:SJ=lcU7A1,O6n8g9]&@cn,_Q4.1EB^-=7XnEz$H&I@');
define('LOGGED_IN_SALT',   'k_S!jG<wP%r6%9%!1|(U0c({1vJ73aujlr26$%oi99S9ya%+pe]qw9Lx.OQor|!k');
define('NONCE_SALT',       'Qw,eDCDbH!LiGaaJ/:NC-6Fhs1wO^#A<7Apn(C9JWC,HGBqskL9hQ>.PtVNB(FP`');

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
