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
define('AUTH_KEY',         'g1ST*/D@^,GH7c[eT>CB]TL9re~r99PC%9TCgVjI#K6Nng{q}Q=]ld&fU7W@&0t-');
define('SECURE_AUTH_KEY',  'Xq8r4b:=#:( _&1Hw32R*f-,NVct,Lce>d%M}(6>Op;:n!#*<N@;IMzwo%#K0hk@');
define('LOGGED_IN_KEY',    'h@ox60`DrD}v3v`3+Vm>S;g-F]DUPOjrL!/K.k[#n&cM!@y!|dH&]G[].Q6Qt0|t');
define('NONCE_KEY',        '{bC80~W>J}$N7o{->_J+^E5t;n-BlKZlvL}[6J^~@R^5ozMQ}:&LYeZ5~}~`:pjs');
define('AUTH_SALT',        '1S^UUoh{>,40D&nzc;H;}`!(weI_Sq%IH0-G{&:`Bw{8`?ce$xlOO:kgId]G-xHq');
define('SECURE_AUTH_SALT', 'G%(fJm4enalXT[uqpH(^dMP9.rps}TrV^Gm:%c3> }&ygWVG?jKET6o=jRD?Z+6Z');
define('LOGGED_IN_SALT',   'oW{hK/QR@&yaO/JzuH+ZZn=eE[8T^K|m~[!Hk<k[#U(X]0KW`qAP@6xul{uWYo2A');
define('NONCE_SALT',       'dI@r4u63)<4| hgT|#h^r+&{l65 uq6l1|L}B9U&/<kW^PD/Cx}fTWMyA/e3<Cus');

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
