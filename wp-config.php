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
define('AUTH_KEY',         '2:kOkieK9Pl`H/[7|jZlm4JA<h1Yg@<xA|Al[`TN5QJ$HgpXc@lvo*>US#l}[[a|');
define('SECURE_AUTH_KEY',  'UwVBs&ES50&-*B>ONr7:9/1OCWwsYf FNtv3K%Z@hk_W9bMGed(xNkFBds?_k`*C');
define('LOGGED_IN_KEY',    '{#5@M{(h[F3(,AjRch)o5JyWH|H3Y-JvgD`wc=Oc_iUhWCN-Y7*o0>t3F`A60]J|');
define('NONCE_KEY',        'vu(TZKo-3{JL.%8Ld1&%fqU9GfXd*F)kb:i 0+,Qe(Trn-iIe-w@MJd=ymV1n`-q');
define('AUTH_SALT',        'YhG)uuye;C+7L<pF|`lYuhd113&i0_VmiO.2{|x}dy4u:D:H:4q>k1[SeUoL< SH');
define('SECURE_AUTH_SALT', 'VN;I>tdpwegvU)H4`(Qf=&[y53ylbrL+i+#5>= 3Ztk^cX:{$PSZ}z17D7@in<OH');
define('LOGGED_IN_SALT',   'oaAqrs|yp=&H_8^0_s(u{T8w}7<(UMjD1]7^aXhM)R^wfRXi8Lj|OGdn{IY>wQ<K');
define('NONCE_SALT',       'x=y#vbH=@%w;c=$B]AYl5]y,OXbs9V]navo!0B17<OUW{5w^Lil#YVc7rZ&Lp{@S');

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
