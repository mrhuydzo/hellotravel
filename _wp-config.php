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
define('DB_NAME', 'travel');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'L1-y{Yk6@8}-Cm$|=PC~M=Dy<Ef4!/S&opUIY/+W#sxL=<oj$d>NUeC2sYOt(O?~');
define('SECURE_AUTH_KEY',  'tO,%`;DzPg&]GN@M5aL1YT*HZ0pA5Y?4Ej!x+kW_??k,cG[4Vdil8/c0{4Q;9Igd');
define('LOGGED_IN_KEY',    '3~ x4l3KgW.!m2mf>*l[|V.} iT73S1N>B|VX~y0Uz,qWCNqmpQjo55z[#9[hQh+');
define('NONCE_KEY',        'Ky471|){9)G!`c-) ?_n,gAz&)~[8Kb![{7rxA@SKMol@q5zIFb<(iJUt,G/>+Mn');
define('AUTH_SALT',        'r;7`QEDJ*Q>;,at-Fx{)<X{1g]]-zY_v%otj4nj fQU$ow&(34J&=Wnl2C!]}6~J');
define('SECURE_AUTH_SALT', 'v?%}#+U)j[rv*8[BW~6i>EpYFyCn>zx#0t[XoJ<sY%gFs6XRFrY]}3*lY~/nS!@3');
define('LOGGED_IN_SALT',   '}d{ eDpkg|S=hyM0ANo]@6`(_=;LDS_*cZhn?(Axq9#]DYeiy~_|VpXndPc~Wn{-');
define('NONCE_SALT',       '~{eJku*6(c6g]Z<!!HAY;+`q~50j7GAQuja:O(lWrB<]Y*W1,yc0H2On-QmDu+En');

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
