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
define('DB_NAME', 'wordpress-ospfd');

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
define('AUTH_KEY',         'MeZq2iA,69-hx.`R%hPvSpVsEnky^ghuAPW4UuRep0+-Gr-Y6{p.b#Eo|1xWmr+F');
define('SECURE_AUTH_KEY',  '_F-d|5>JE) 5ta+%H{sKZUJALi=kRZzuF`ncK@{&;P-k vs/+E1= `.lU2)HU3YQ');
define('LOGGED_IN_KEY',    'x:}>wwUT7.89QO@GhMf]=4DyiZ{W}S4i0Q+CX6pVBz+-[h$(d0Sn*}7t9*/!*$q1');
define('NONCE_KEY',        ']y1XimB3t;f`B_|6Ke}6}xC(rac[b#,Ow}N-M2F_uB[w$[C>H7:Jvw|p 3f=3j{I');
define('AUTH_SALT',        'L&]k|1m<>[t?7LjU0Ms&^J+gmzlbNv>Pbb5co>JT]Q#kz/,S5c.qVk4&Zl}u.pZv');
define('SECURE_AUTH_SALT', '|/6C:{fqB(WB.2<,2+~-L;|+eII0Mi0/-p#9rwEyrd(u~|N*>bUY=ev *ixL]Jm;');
define('LOGGED_IN_SALT',   '~W_OteJS0rD|QF:*k@g|7x7zMyv:}_0]k,mZ6|e(o|4xc~ |V UQ4_6+UKY-]FuU');
define('NONCE_SALT',       '|HZY(A;iC~`8Zk?{>oS{j|;j?@9d{J[F?._I?@c;=Me;&aB)!H-`+F[r2seCZ.0s');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
