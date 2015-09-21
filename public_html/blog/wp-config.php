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
define('DB_NAME', 'travel');

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
define('AUTH_KEY',         'v`)<,MZHpWbH5fz?pzYFdny{-h=`+{g-e5hJ~pQrFWV2)y,W7^TFHd>ALC+*%L0H');
define('SECURE_AUTH_KEY',  'q! q1pt6Ua.qh/BOC/n-i>R9JHR<{[v>S?})UB&3%A8*-ub|K;=l>pA`+N@(:k)V');
define('LOGGED_IN_KEY',    'fzk9+Lo}OH;=V8&2+d@4MKA`|A-i?A/~0za|+x1t,X.2QW|{-f(d)}F),]Zuy}t|');
define('NONCE_KEY',        '(^k{4 {_% UW/=!>l!is[=He]===+N/HVnv7&G;:[GlN+h .RG/lGjs.r/-VOH9E');
define('AUTH_SALT',        'Gu+1HXag[P(67G~O.|?jjc@Ml)T+L!Tz-NVS(NEW+ %.{iJ3ptNkX8>]ML1V0A5V');
define('SECURE_AUTH_SALT', ';O3R?#-T=tuA]Mz44MY7hV1j$T7_s-+Xcx>4e$KLOHLg+@}h;_(5fN#2`+sSIyWq');
define('LOGGED_IN_SALT',   'fB[<=d~H*?s[]5zr!a<hjGCv5vZd?D&E:Ij%M:?&rH3#1x5Xu2%U?bQ-#N|rAgHR');
define('NONCE_SALT',       ' ,%TQe71[]RcNRh|1KB+#gF.^.R|(HRSx7Z@J*x!ZI#pIto`-#c6zIRlzB/|$W|H');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tpbg_';

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
