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
define('DB_NAME', 'wp-site');

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
define('AUTH_KEY',         'xQ+ Sw cOyz.P<K<3}y!{77NZp/Gn`6;B/YiGkjwh$FJHD3@9#::v77k:n;BC`$o');
define('SECURE_AUTH_KEY',  'falBb;rN95|k<lpJ]i gs.k;k?$]!uh{/kK].+[S_lX(#wNz]x!!{ S9;+k$QGoq');
define('LOGGED_IN_KEY',    'I9H/MzO!!4Pd6,K]+uqIXdXB:UjkN^|`6_RzlT8Jv!_CCiQnO6GM;F#^sE1no<xs');
define('NONCE_KEY',        '&|/xW0]Ne~^E,wA25b>HHVrs*mWin1#*W$88&%+3_Gif-vZDQ4Tej8FGK3BwU!L5');
define('AUTH_SALT',        '9k=lB3Y<cWhvmoHdIyy<*X[sbhNWz{d ,{lxR5<yc&/q#LY~]d?-lZLth,KJ6Fe;');
define('SECURE_AUTH_SALT', '9RrORld`HNuz&hcUDc+U OC+l7ls=o*iaC>P|weOA2-6kSE6[r{C=_AT Nc2WDR2');
define('LOGGED_IN_SALT',   ' Z(K}?IcNSyi`D]CfJ:lLO4eV1-{2m83^m{)bV,Ov)Id$3G_WAg=$`z,@V(JH5V7');
define('NONCE_SALT',       '>]oVhyz>(7v?JS1q(WFjTB g=gnu;4rg5iTEHfHH|c5&#6I?j@5oPbd0r5Nz7DHW');

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
