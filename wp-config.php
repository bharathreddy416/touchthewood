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
define('DB_NAME', 'touchthewood');

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
define('AUTH_KEY',         '2.<Fd>Ij_%A51jF81}TgoNn:-)m*KUjL=~3u*+HiH4/^(BcAf^):OSkC%- K6rvE');
define('SECURE_AUTH_KEY',  '^L{:]5;8&szlqKQw8_Fn!n1y.!pO$a^qxODgBG&Y<$Gw;8jwiZkq-tpssQFcsa,2');
define('LOGGED_IN_KEY',    '^&M+vK@96F%Z:zB/*cKY>G1O/OD1u?%rW]cr],1{29aG0rSL//x#^fEH*.F^:f{+');
define('NONCE_KEY',        '@]$G/:&eQ-sD~<2b,O+m]||l*=yg}Y*D*f>?l!WT6wt6t09|I]m;*%)2]yjRpKfu');
define('AUTH_SALT',        'I)V!iV/Wv*GZ)B5pQiD1kkP5EhB<AKd46&={RMv:fxffhi8#3j5vh`DcK1Yzop:~');
define('SECURE_AUTH_SALT', 'S=|3(ZOU^a]RJ %BTX(_B|=ooy)B3){9ZLemWb#~8W59~2XrCyy?e^:;~94!Oix`');
define('LOGGED_IN_SALT',   '_yy.7?-2)/5y2=<:}3X%PyLi{,|Ecmw7X,nl/jK%c)wV.M~v*+,401G7)D7<Y79(');
define('NONCE_SALT',       'aPKw# u]sCY)G?&`:W8pc(#7$@ubK$SIOX~p^d-Q.d<0aanwQ;}N>5=~3uX4`Bw5');

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
