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
//define('FS_METHOD', 'direct');
define('FS_METHOD', 'direct');

define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '12345');

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
define('AUTH_KEY',         'JFW)gX#4~UaHML#nLWWk+.auW&z/Xb|Q^=Wi]AlpT:wrOSJ~G*ddKdm@V9A_,T`K');
define('SECURE_AUTH_KEY',  '(P_:4=wna3$#vGnDbs;f+3(8WFY[bd]nV#U_;V:}n1z/IF&QX7Ys{eWBMVh?d8.]');
define('LOGGED_IN_KEY',    '>Z%HNWK|=8joJqD</K`!jh&^-VLC)qVvn0FdpbP6t:AkqH+sK7>T~OU}|rsAJIt<');
define('NONCE_KEY',        'T>Dz{:VO=sHL1ws2JLvogIg=![eM)AMl]7WMhU5Yo$c`qd}D&]RMTE-.Y6LH>}7t');
define('AUTH_SALT',        'HKY9=|wrkhOa.+?[q}5sVgD?lUUS9ZL^|wD&W,}G!R(g;yelXJ!`t=H!9J?&c:(X');
define('SECURE_AUTH_SALT', '$)a{l5(]%4_eo ,T%9j6}sVS#9Xy#uo{F9N1[X$`9}Cz_>eG;lo28`RBk,[s @02');
define('LOGGED_IN_SALT',   'YLJ~1}/0@g=n-$vyN#s)+{X@f0>H.M%;;rGqo% Pl7AvhkH~F0I:Yn%2Y?#Gwt(,');
define('NONCE_SALT',       'dFCD%c6/<IM%[?qvm&N~`KLo/BpJ/n_l%pz>bf+=o}w>vsPMR~hrC0Z[#y<k.KpF');

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
