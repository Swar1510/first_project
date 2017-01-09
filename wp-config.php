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
define('AUTH_KEY',         '?dQV%^prthE_LA4j)(gtcxCl1(SA@RC0O+dyqVEPqr~P|>lcD(jg}CQ<DU&RBL&H');
define('SECURE_AUTH_KEY',  'TyZ+O|7deh3d(kv!9qA0[T~0GyO=+,aG},Cf?z:j]VL`Lf%|mtM=Idt&WZ~gka|<');
define('LOGGED_IN_KEY',    'v|LiNN)P~`CFL&&dxa%;g?tM@yc7hW,/m-bd|DOlp>tKEY7@F@S~z%n)#[YYw>{/');
define('NONCE_KEY',        'yb9lk|K+76Oy9f.PF{Tqyo~qilI*Wu7ybbBe1oj>RD_l,dRB@,0#`8v:MWA`5KG?');
define('AUTH_SALT',        '<CI 2ohIsEDAE**w}gk)4O?K?D$=GVb:-r2g4.j|99BJa,,;q7,9AR68}V<YU$>y');
define('SECURE_AUTH_SALT', 'Zqyz_+H3-PG^na0U9n$N~LwUDa_p0@S;$JL}dXHY/!8#Ku*vLS]kN,`~Ri9Qbwpq');
define('LOGGED_IN_SALT',   '2Cj*qS%jUWhQm=>Um.4rN-f9Ty,@U^/zS./:((Kn]RP[YrX8tyg/mO|q6;Z;UaDY');
define('NONCE_SALT',       'mJ8P9dV% *rc6X|~`k!-easHg,P{,867H|6f9kuY-~trZmRD&kWZj}sUO )ZZdV]');

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
