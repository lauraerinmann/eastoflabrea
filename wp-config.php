<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'dev_eastoflabrea_studioa');

/** MySQL database username */
define('DB_USER', 'deveastoflabreas');

/** MySQL database password */
define('DB_PASSWORD', '^Kzzy8iz');

/** MySQL hostname */
define('DB_HOST', 'mysql.dev.eastoflabrea.studioaporia.com');

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
define('AUTH_KEY',         'Y5H5PdA#;t`mzv6d+o*b!3T`SRl7xD(jzI+o)bdJI2e8!YS_&jOY5#|sDik7aD|#');
define('SECURE_AUTH_KEY',  '&t!aHVQtA62zP_Pm78W|~Te$Ok73xTm6~Als!5@?Y1Ojem:q$Sog?arAuvxfpH"d');
define('LOGGED_IN_KEY',    'nPZ)2@8*@JEfEmDJ1ZjGU39#hhi#mkZ5dX3#:"lt`ewHU5wI|JBIlPVypqrjGnTd');
define('NONCE_KEY',        '8wE+?gyiYp@AAD^bf?o^NUs!jjdqdItEfr)e811WF`D:znR"gqrWQpy1P|a?:!8*');
define('AUTH_SALT',        'Mv@|w3:PWhuS|sKX6L(&xT:atqc^UmcQgqMu;9$/mVOVyxJoRL*+:`*8GY;o_Ibv');
define('SECURE_AUTH_SALT', 'oFF9vKw?#U$F~h#^U|KEqCL~gbzxW/myNRQETr&7Ny@%fjE&Ap%*aEDolS4_bf5~');
define('LOGGED_IN_SALT',   'gjaGTxxwn_o#EM++(PIVe7r;NKer#1?e|my5HGuF"U2x^oy!lZCz3O_qo#v`rC13');
define('NONCE_SALT',       't"H?tWh+tuJ?kx95Dvd~g_X@Z4ep~cmWuY@EnF)vqno~F&Mz|+MY:YrjEwGF0R/U');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_grg2na_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

