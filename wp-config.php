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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'happyagentteam.com' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '@s:I9EP~.Yte,s/4ovT${K9M~_k^*uU&4GqHY<.Tg4p@Xo$fglERRhx5h8W[+Xn{' );
define( 'SECURE_AUTH_KEY',  'k.H8[]VcEES-xhRcY9AOxPC(.#(s@qaGC)|g*{1e<FnqclGN`z~wau_u28gil+1j' );
define( 'LOGGED_IN_KEY',    '8Te|ZZDncE=&+ZA/+elQAYC-?wTi-PdPq]})E@c)t[3_7 PmLx*8#iRU}z!W=dlJ' );
define( 'NONCE_KEY',        '*mhA`2V<(k[mWc.41?DmK6f0JABXOB6,rp<-]G%g]A!;h`F&SX$A>SdsV$Tb+Xz#' );
define( 'AUTH_SALT',        'OFnx7pFK,sbk]1J53)#Ye?VtXE,ktigJahEk&o&;62Sw72ZRE5LLL-w%+%1?_f>c' );
define( 'SECURE_AUTH_SALT', '`zt~I?Fed+45Yw-<l{ %Oq3KzJy}.:uPYmdxYpu|^9}}I=hng0<Y@9Fh;Qyt/4Ab' );
define( 'LOGGED_IN_SALT',   'v,)XA.d_ji&u zKQ2ILb+O e;yPM8},]lylKD*c|xhziFH<$KxI A&bIeyqYbUm_' );
define( 'NONCE_SALT',       'O-8h?.tE6:HUYYO<6x]yjGAU^QLgAAJ7S&P90>8<$@Mai@W7dMzkZ!V;K `][E]_' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
