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
define('DB_NAME', 'portfolio');

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
define('AUTH_KEY',         'b)&Rkp h96UEMYi:_q}LVO>69VU{cW!Wv;dUlncD/Rjj@CXE35@EIuho|!i#f>Df');
define('SECURE_AUTH_KEY',  '{=pm>?WA@ f7ZzFhRuG$x%!Jc%q`fTNoUVwsJ7k%nTb0_20,R^P_p/V|$K!r6kp4');
define('LOGGED_IN_KEY',    'Esq2M]l5!;:t0RSFw2EyHk.J?tL$wB<,/vWDVPLd^C$>3N5KgC$tlca+O`Yyua*`');
define('NONCE_KEY',        '0>gr*y>2:k16Lbmbjqiow6!Kz,>7j/#qHyfpSY;;&>cQ@>;3l0}]Y*?~1Z6l};j1');
define('AUTH_SALT',        ':hkn%efuR3>s0[ZLrc,oQ%)J)l7j}w,|HKOJ~zi3~efA=.nN8|vFF0$5aT9Y+F[0');
define('SECURE_AUTH_SALT', '[t#$;:^Bc^[[r~G>[eI<`.BXyO#n`@VkI/Pt#e8u !X#STg9u>R5[JYMSTjE6u2]');
define('LOGGED_IN_SALT',   '!_h;bO/&~u_3d82!kudKd#)-xZ aoT|_;Tr(<tV5V$t2N;i{4[s]L)e_`mwq;G&d');
define('NONCE_SALT',       '!J/kK)sbaIG~D~wINGI;51A_he, D8X h1[@9;zqJ/FOIS9O2eY{(Ok9F#d>GH4$');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pf_';

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
