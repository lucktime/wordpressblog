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
define('AUTH_KEY',         '/yqeyVEkZvhcT]o=!k:{0i::HBqh=L{2K.Oz=db#CTAzfV#ZY{@&D;r8xA^=g!Yj');
define('SECURE_AUTH_KEY',  '-w(/Lrb%8E^-DMU/I|>&QIC+s?K?QVb4P+rl7NF@tCCp|$6)3>tRJR=b%u{.N9vZ');
define('LOGGED_IN_KEY',    'YBiIX_6V8)8$6ikW5h0goWJ<NQ.p$;Ux0>3x3`mq6>ABa(hW$e$AY^d`/W|n,!,V');
define('NONCE_KEY',        'g^Q?>/8_(>zZ|_|0Jjw96Q@/z9AAE_&`m4E/#Bj(X#Q&lcv=-j*^klq?tX)P<b}^');
define('AUTH_SALT',        'g#xTE[q=BGk,`*?Vs-}1J{X.P4/63jB^]=;rXhmBp.-n[K^{9ieWQ$qQ3X.y8W6)');
define('SECURE_AUTH_SALT', 'Wo?r_u.X}M5xg#hos}L6ZLi;.:]V#2Q#7}! 3E+S(egKp,VMs[up2=Z>g?%rMdZ^');
define('LOGGED_IN_SALT',   'hRZIeq`-oJZmvpy76]*V,UI,?g,Lpsitl9YtN-1oSyzI(v#zXWC/-9WOLRh:[Gg.');
define('NONCE_SALT',       'GFLf(s&B >XvWJ&n8|H;8/c/KSb3E>RUfPTa!teSY psL-exWR=>^M4]QYiU4uBU');

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
