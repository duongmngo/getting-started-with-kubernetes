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
define('AUTH_KEY',         'ip}|>;+!%+*V>[ Y3yQ[8PFP0tm^D+}_.vLCgzxeAZK(aB<!@X,hL~Ycu@_11b_?');
define('SECURE_AUTH_KEY',  'Y-SI<a sK9@@Xwy-1e.!-z$u.j7w<&4 =iRZWc)5zso*Sin*7k{mlbWZZ.jl+2Af');
define('LOGGED_IN_KEY',    '0@m)UBDGKi&2AqqcsdmXKh8L*I4r$&vQ6]:9wL`81%hsTQ45fm7sam6chs`xdyk#');
define('NONCE_KEY',        'T:>pdPdX>h=~jm|f1yAGu-i?B/6#M%VLk7A0AY~`nm.MHsZac=cRL*sM(>yi3{2L');
define('AUTH_SALT',        'xt#=3-@;Pp]{+ATZlOk!@GSao^ow2R:H4_I~*WLMyP}lsf Udgu:2i@TUDFtwWD`');
define('SECURE_AUTH_SALT', '6%|_1jMsORTFp~An)80?ay7[$XztUy](xM,4c,L|5;<ynA<,pq%}<mxR,O~_+S8)');
define('LOGGED_IN_SALT',   '>1rL/szY~,ohvG0lTW`TLER}7O!LWAy%X/aZla:IN)6 !wKjmLVo#1`H$5HRc#--');
define('NONCE_SALT',       '3:~EW;<y<2Xzt~Lc:yr8/WrXQj7z| ?7~~;9t7$X[YfT rfL21/sMw&%sy3zYfYf');

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
