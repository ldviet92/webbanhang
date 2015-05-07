<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
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
define('AUTH_KEY',         '|Ei q3;;(4r^}8N}}`9f_V6-mI~cUfTUOF&E!zVT^7l+u8}8|c GA2PZ2|I_*Q =');
define('SECURE_AUTH_KEY',  '~}Pd+mEE#M/`>(w1vZ#R_RJZUdyTGJY:b*)*EO9}$nW0:XQHt8c(p20}h-X3Odjg');
define('LOGGED_IN_KEY',    '+i:B)e-[c6Tc}Wk!F*[H1}wXMQGL `OOvKyO_L7fC$%|VvAH b sN0vS(wwfn|Z8');
define('NONCE_KEY',        'K}rm!,1p`H^Law9/LLXJC#Q4I*f]JT6>=e4|HA:?eS2ZS-iD@>O>K#~&A_]q(A`K');
define('AUTH_SALT',        '&Cw9}r7tvz*K/Hb!2!TR^DGpo{rrh-k2<h7Cd-U@I4mk B!#c*&C}_<KAV[(e;<e');
define('SECURE_AUTH_SALT', 'WFn8s -KZ#]I`![6V1FsB+2V@e%!f%0N;38<M.+`A/7T6{(5p9x!..N^&1etu/Gc');
define('LOGGED_IN_SALT',   '^Ce06YTEd<_4+mscV_Bdf3Oud5-<8`&Bo<#e7,J?Lo+*`? KG*rrio{n]JP!Uigy');
define('NONCE_SALT',       'txhS|@dT_#.5D287/>E$ El_i-z_-L< t rirY++qj9p`-LQ~L;=2kGbW`kAb3eK');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('FS_METHOD','direct');
