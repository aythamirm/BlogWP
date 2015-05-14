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
define('DB_NAME', 'wpblog');

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
define('AUTH_KEY',         '@:d3-z{<^rO]xuT8ysFhQ?R2L?Ky#|@J+;+[uK C->`1+_YAMqq?#6H.wdHF6g4u');
define('SECURE_AUTH_KEY',  '*BxSobh&5wHen+{_?y3.*a)z&6+5hMSow#5L|ZC24)h1#t!f8_^s;I/_Ppv!OgAO');
define('LOGGED_IN_KEY',    'F*pR}&1O|Xs,s(:-HW-W$)jP0PW&Mr29xN00?6[STe)`A4.$N$ZslsJz?s57JC)-');
define('NONCE_KEY',        'hv<j+l8]&$}q%NLSQ_|> g*I=T!Y={4jSM#D47s~Uj-+bXvy0ZF2nU4^D3vLw,5l');
define('AUTH_SALT',        'Ni(6:QPtEl&CU:k-3uQ8`5-cUa~~/_Obowl.VI(#vX0i)jH=x%Ghb)pQ[8/gn[Rl');
define('SECURE_AUTH_SALT', ')(@d7C<c<qYoLzrQ/zzPmvpqPNgZFq3ns(~&CiXc&CY-l`yepo[Dz?&>aE[qZdQe');
define('LOGGED_IN_SALT',   'DzDG9k9y~3+ ROVIPs+WUhkD-:31r*?8}09|M(cX97U458pGIiq:q$<h+(_A(MU@');
define('NONCE_SALT',       '++k&5Pa0m|=j2A{$L$l@u5_(X(q@yr`to@--{vkqr{A0-Ui5sG9+oZ[jlhRd$9jl');

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
