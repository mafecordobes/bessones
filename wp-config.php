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
define( 'WP_MEMORY_LIMIT', '64M' );

define('DB_NAME', 'bessones');

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
define('AUTH_KEY',         'af14~[Zt3,iL;OR8o,qUL8e0shjk!<mH!`n7=XO=#fHPshTnoMDm@29y;qJ .w?&');
define('SECURE_AUTH_KEY',  'B}jo/S_^7lZ:n776!yOhqTh]DVy>^|HqATvbxfR3^:@|?KzK4w:)|J7#&K]l~f-L');
define('LOGGED_IN_KEY',    'uLPZB%pCP@Pd|-9%3-_C[4L&y$-%mBjpJ+Lr#~YO-VZcapyR2/c=ka0tnhgQ84eP');
define('NONCE_KEY',        '~- cirHP!PFPn<fnRp|]Pw@9#1V^~R-Zg1KXIRw dw3G-BvGnLoYIK(21vZFJF7z');
define('AUTH_SALT',        '_=U{m}UOW@Ma@m-2@@}8$WTtT *L|yV9_SG2{dWiU{YK:#OfF]6veww&Ix1E,i8|');
define('SECURE_AUTH_SALT', 'q.D*d8.<Q<Fs*G{CF;*A^,AUR@w$*7mWB5FJ>8e,coDnZP{. $21xn[SI.vFmL1f');
define('LOGGED_IN_SALT',   '.S91>D8Su$1k|k/W?)X!I*^F@XX0[it}A%>5R:]t1I$=u..yy&0CI!o(3a8lTv=X');
define('NONCE_SALT',       '.SW5(0}-P{,Ab9i{^[K2ATkS7%E]!O-}1Lbiz*!{Q<7S:<&7-&L|9iqSZ,e^9@.R');

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
