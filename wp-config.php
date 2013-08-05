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
define('DB_NAME', 'jmcdesignstudios_wordpress');

/** MySQL database username */
define('DB_USER', 'jclapp23');

/** MySQL database password */
define('DB_PASSWORD', '722c722c');

/** MySQL hostname */
define('DB_HOST', 'mysql.jmcdesignstudios.com');

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
define('AUTH_KEY',         'k|(3R3:V+AM|qFgtoIvSM#i5y(P{ZWQoxqf<Slre6<0bctG|}c.iAZpeS5sMZ17F');
define('SECURE_AUTH_KEY',  '=N~^JRi>fnpV2|5<XTD/yD)<RF%RPUL4v FW9k3-IUj7$:3~i`7PB$nqhE#b=R^e');
define('LOGGED_IN_KEY',    'wF7JyGT/c!XoKe6HR{.&Ut5~/Fv@H)RN{1FxXz3UZ]%[`A[6.mF5%Nbon]9M*cf9');
define('NONCE_KEY',        'i}?j(V|~Z+kj|zr+S,w3nO+_TdqTcnqpqMRW4StKR=|*n4_O_.m-:R K[LXGB}Y1');
define('AUTH_SALT',        'O,u%U(o`~Vwq-Lk1&SMaU5&GZv[i&Z57`2}SmPi~pGq~$5|X:JiK?sOx~V):Yz [');
define('SECURE_AUTH_SALT', '<=*:@`|*:SABAD!KJ$a-n|OcRKrl[1| >HW@etwk.GYBO#qqdYijJM{2:6P@VV>g');
define('LOGGED_IN_SALT',   'R7.p-NqQDg^]]4(V3UJlirNQAQ7t-x]43|Od,EB-P<n@^rX<)! +7}G|4++a961v');
define('NONCE_SALT',       'Y6>RG{XaSP6X%0jw;:7Rujt?w?ANbDJ{D17;$J1a1CuO=mFFN67E|XEC<0BN$#{]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
