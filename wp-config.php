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
define('AUTH_KEY',         'P}n3t;Gu| F1os{p?}fU4^jZWZ93hLX{jtO41{AKm.}Y3T#_^|^g-M;B/~/03|xK');
define('SECURE_AUTH_KEY',  'D?KWiK}j(JsnUz,m?.)X* +GnS?Z>D49lFICH4ckyFl9tR#9%1kgAXnC7@j(ufPq');
define('LOGGED_IN_KEY',    '~<vIF=-~A%GWp6Y5kA[s;E9s/tAAy|ZY?l>fk&V<z @&PtHRE(a!LnO>S_hox61o');
define('NONCE_KEY',        'ntX!:I(#+2dbc#Vu;Gn|;w~*s I1[k#Z25$qG+-np<`p0`s3RsRU2V_Q2S):3wr^');
define('AUTH_SALT',        '(Zhb@Y#-XS~Mi_Nnd1[m |uU!ZyJ2Qf`x1XeR)270Y:=8Y(aYdNIZw4{LKuwR9y*');
define('SECURE_AUTH_SALT', '&[(#$*}wo)=7_{Mt.0|MuJBh`ym;v+9>}4ErGoYRP:!5(x:1<g|_.:Nt<J5=SlT|');
define('LOGGED_IN_SALT',   'XCmHr7[]X>CKslm{?6Mp:4i04Bs/x{$>ENXHB|1m(>P*5q8H]Fe>_(&6-|6Xq_V8');
define('NONCE_SALT',       ';{c+|xlh;Sg+wH-e/!n#|pk]IU>3Dty>==4s4Jl/Xw8WBC9N4KUI0yC_VA?x@F=_');

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
