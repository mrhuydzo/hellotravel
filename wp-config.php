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
define('AUTH_KEY',         'E`OavS7wO7|tT</U|AaXf*>&ROFE]zx=75p9,D2U36L-0!lt|b!Oecl1-:fMl&z[');
define('SECURE_AUTH_KEY',  '`jM9[noEX(F!{+5Wf`=R^???HEHptCSHc)AMy#@&-[mw?_=dWQya&|%mm]Mb1&Ap');
define('LOGGED_IN_KEY',    'A*%NcG(z`UO]/XU~w^.fLAMZ/1%(XyoRA5<(ylWvcVtH8WPazz Z]oI];}Va>PDx');
define('NONCE_KEY',        'eA_]a^?R;+Y$?s[r.n/:0fi~%o4EX;+f^[nGl(v<Tx)wH~XW^n|9>M_6HmuLH|,i');
define('AUTH_SALT',        '-#WeDd81!O x)WWA^Dm1JeD .c>HfyBjXc[kKI47a(_;R/}Q0V={cvjLY!T+XlX~');
define('SECURE_AUTH_SALT', '!RyoJZUjR/tk2&#h)z^|i1;X!nlRpdF{ yB37K|*$jz7#j[R>Aa]/YcQX/_nH@Ru');
define('LOGGED_IN_SALT',   'uBQ.B7FlS,R.gKXAbjr88e5ICs`98J+Cyb^E1J*P!@@W|gEkI%w)#j5C/ki@W~=M');
define('NONCE_SALT',       '+-nbo /L7w1d_:!bRn^b+V?0I QuTP#I! zi,l3#aWVx2oR!{4^sS|g^3e]&yQVL');

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
