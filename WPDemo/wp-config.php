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
define('DB_NAME', 'wpdemo');

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
define('AUTH_KEY',         '=k&,8:`-Ee5cM|oK_VbxUbx10!#]Oj`w^6WW&a<%$hV?U*hIH_ci[:^6AH4ZuF-z');
define('SECURE_AUTH_KEY',  '`$@>Zt6 {%^UcS;SX`AarB0/2v,)x&n@B1znQ#+|1>,Qu7zPA$E6Xa9P+C@~DOam');
define('LOGGED_IN_KEY',    '&o8ZAJ*LS?,58Cy-_vW/?UC8{zF8el6SS3;a1Y`t&6pja+H?Q?PCB?Gm!CW/r^Q7');
define('NONCE_KEY',        'Uz~=;=I8.@jPDIm%B69KU6,]CQ*OdV)ciMJ0`{LK 0ut)@9WdEjyXCHc3f+BeEeW');
define('AUTH_SALT',        'DTg}3X5$h[7Glr?|7PpDsj,dK5TRASl_U-x=qYA%W~seR72u:)*/%R}>=,o9X7sz');
define('SECURE_AUTH_SALT', '?D-fnAGh-Fvl_j-4I~X6%(X=c`Rtr_:#[<8F53yEzI2a`I^1J6ED(0>I^:iRB;G4');
define('LOGGED_IN_SALT',   'e&m}5&Z}lzbOY[5k`WI|FK]EMX$Swr@ohPT=a3!i]W$zxm*R/tI[ArhKdE82H%C!');
define('NONCE_SALT',       'XT773r2% <A@^p[qhk,HMbWk|MPDWEVX&Z:C# 6dXb[KyFaGBJdbjQ3,4CCfVWCN');

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
