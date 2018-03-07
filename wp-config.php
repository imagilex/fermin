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
define('DB_NAME', 'fermin');

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
define('AUTH_KEY',         '/drtcR(i Gg}dl7*>?}O%)wl-b`sA1?]>323!L)5KtQxRTdlYZrR51&jI3.;_PMj');
define('SECURE_AUTH_KEY',  'cx]tRc2 ijQZEZ/($F})j66+#QoGy{npxjV[tr,>v|F,5h;~XLG,1DZ%1V40-P{I');
define('LOGGED_IN_KEY',    'ru7+(U;w0}:U5&}1`lzWtNtO=Hu%Ov%(SCBmgw*?ssvQb1+$j0_D{*fH~#FJ(SMZ');
define('NONCE_KEY',        'It{]4IlA5ZKh#]Ci mIBp0/kA+BQ`!5|G|E5U1{^(-]WQ,z#h+IWvi^y%UM3W<Go');
define('AUTH_SALT',        '/)g@h6K< ?U#@+znSpt??}p+f_Ex,yj/Zc=QnmhWli:}ts3`(A+66nE<LA-u<.0k');
define('SECURE_AUTH_SALT', 'r;X6qR%(@=vBBDE)]`rEdo|P$+Eqtzh<nbt*)SW=5|w[-&E&:)[1,KzgY6[LOizU');
define('LOGGED_IN_SALT',   ' 0t0W*LvG{8Xx)n0/TU|Ut[<^d0t*f3dev/YHl&gB <zB}&Y^O=tR.Ld5lQ5tkr`');
define('NONCE_SALT',       '+9Rqc[^+9T:?ke!f}yrloVf-rSFl[@U2snXk8A:xmt6%%I>*XdB/xf@fBt!gG~25');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'local_';

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
