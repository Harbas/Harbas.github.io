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
define('DB_NAME', 'rwh-1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '#8@,C:CN^8{%6jbwMKL,{Zn4I32XdK|]Z`qoF*b_&Lc(</x4HU.lzjK4IxXQ[|z@');
define('SECURE_AUTH_KEY',  'R/dY&{a@>q0i wbi]Xv}WhNO<B+CZq|RwiEEe(aU>?H4c~FwXc,nHp5k, AGfWA@');
define('LOGGED_IN_KEY',    'Qc{fEw{~~RP:OvX0&<c#a_vB36MEc_Sx Ma)*}+&U6t$#GOS{|p9wfB@YOEcJV`w');
define('NONCE_KEY',        '],pIeY2UQrD)UyzoA {!M/~61nTh@K32&nvr2yY<D=i{_!6}o0<&CD2x{cyXS@?k');
define('AUTH_SALT',        ':h2E/YB!u,]`>Kgo)&;2%]Pa54Wbwl8+M^D&@wPF?=ls,G$kJ&^Un@J`csnyf*~r');
define('SECURE_AUTH_SALT', 'sSgRLJbf)(v@bE2<G`d~@i/s+[``wSaEZ$M_`pQCCH2y3ubL&xYzx7E, f! (i(h');
define('LOGGED_IN_SALT',   ')By%NK/[p9HgE{|HvK<zh3Fuuy={3o}hyN3]2C{spRVSiQ; <%cdV1fR,!gls,*X');
define('NONCE_SALT',       ',RyR|n8s%Ko9,A1aZBv%!>mESSpKVG/F=Et+5*33OC.31>N&t!5@,,uabdko:lGB');

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
