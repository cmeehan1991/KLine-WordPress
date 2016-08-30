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
define('DB_NAME', 'kline_rr_bb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'ei{b-;<Sh2m(Y0b J(Q|Vut2QF%$H5!2*j@6C?E?MK*|QN;x(^7/vGa#PYsfEX>k');
define('SECURE_AUTH_KEY',  '|-p2|N+D-*jFq?RS3|h*gc<(#qQQzk?O7,z- CFXsX7#(W`L|Adg4A]8zXZW=z5-');
define('LOGGED_IN_KEY',    '~G[7PSPfbFi-5>$.v70^3[S$PT 7=^R1~hd JKP7AN(E]9L#Ke-bd~k`=W^jRG]+');
define('NONCE_KEY',        '{ndc+i[z^kJHM&tho{Oz31Vd4F:0Rbe-W*grh*>G&/e)qMw(rIR9YuhHY|X8EIko');
define('AUTH_SALT',        'qj 6Ylu|[iw{FgG>jF@}sC:-@M&QQX@?+->,PYs9>|-6:rngS~ 2S)/|#)-Dr-I7');
define('SECURE_AUTH_SALT', 'yb}&ts >M(?|Z-1ExeS}5s:)c.j&./b[7~P,;#m-faB$+z+%pbO,md-f!+J7A@Sq');
define('LOGGED_IN_SALT',   '4erT[B@YNJCV#nKLA--XnO:GnyI6qN4>dT?z-eJd$:9K-Swf9[.Sew!*%SvVG;UR');
define('NONCE_SALT',       'Db0~/o~BNn.uMx~Mp%,ssj@|Xw,_DB]4-Uyexd4xT#8|K=@Rnd/5:#wCNkXy`!Ur');

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
