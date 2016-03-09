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
define('DB_NAME', 'badderen');

/** MySQL database username */
define('DB_USER', 'badderen');

/** MySQL database password */
define('DB_PASSWORD', 'n7siE6GCA3j63PS');

/** MySQL hostname */
define('DB_HOST', 'badderen.mysql.domeneshop.no');

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
define('AUTH_KEY',         'k4|fZr{9v-|ia*zZi+;6oP0KmO+ppqW?!V}exbR!uoXif-#XxZd9*-p2iGk~0B^4');
define('SECURE_AUTH_KEY',  'RF-Ovi-gF1+spA/fW dR(u1r^m$l2Lqyjh@uw@VZ*8Oj28~SY%Q!,7=]8Be5*J!;');
define('LOGGED_IN_KEY',    '%]M,CM2-pPn;]o)ss9& D6qXl9KBd7G`Y<-v8RcGbhMX,G/QXnv3M3%my72TkSf@');
define('NONCE_KEY',        '_*Bvs$#;v2` OC]-n9%]/K0gc.oO<V ?pu4qD5G=V_.UA/Yu(>N Ea,a|:rwgu?t');
define('AUTH_SALT',        'sQ{$HJ]0r75BuimAxE&~&@dcPtaEI-^#&33H%]@1[7uAk2)s{K^tygTXVFO-x[^Z');
define('SECURE_AUTH_SALT', '2@IlW-sHbYv5Z0-ZS8I(|XYY~O2L)Zip{_Z{3^Mp %jfM#Q(00o+N9&*q@An175/');
define('LOGGED_IN_SALT',   '<XP2ZuGtTR>A[}:94zV|Y!;>+s,Ff%lzm(x)jHSY1uO$GUnNP)/W2wkRVwkOVg,`');
define('NONCE_SALT',       '!o+.bg_A1$gk%m>0w<TD3biyw9W.tBA!cU=^ie1I t|w6y&4Pv]V:.DFgBYV(m[.');

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
