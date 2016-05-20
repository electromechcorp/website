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
define('DB_PASSWORD', 'redhat');

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
define('AUTH_KEY',         '8*Pmuzh-$LaPq0LW$d0@:Yv<(Qz8cDUDgh*+G;bOCo-m@zSa*`6LuE#IE,JCTS#K');
define('SECURE_AUTH_KEY',  '?iTZMeImgPkP-=5<<:dNXfep+KFvX1) }+MycizjYBlHRM]}4XOGj#cs0aUNC(E1');
define('LOGGED_IN_KEY',    'V@u1^L5;sR.nF(t$fH.oGi= 1Ij%E)-HasB5!@e|./~<IGp~T n4h$-vql-bIyMC');
define('NONCE_KEY',        'BEWyU.~G;pvDjjo^nzY^t:0ToQe.t$H[I!RrAHtLd_t!r^1*jpkA,d>Y(BFRP74 ');
define('AUTH_SALT',        'MQ84SZ uy5NVefEWQ<hSrHwXN]DgVPqg|vh1JUy YbElT;Ib?WO<]C9/o[BFRToo');
define('SECURE_AUTH_SALT', '&_L9Y}7X[N(WXdOp^D[JD,=h1[`A9L<jm@lF.aG=B>$zYk~`[jpP?1P+3P^N`=m:');
define('LOGGED_IN_SALT',   'dv{)$&7H%P,{x?D*{I*g%KJdXE[L-Of%xdW?~g-*xYegGx7QTNrEm>nz;d*d62,(');
define('NONCE_SALT',       '27Cja$i%oE9m,Zw3)5Lxehtm$BM07.o4e;Glc4zWwv|92hP.a>4zT{VAKz19flP/');

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

