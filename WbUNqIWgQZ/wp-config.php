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

define('FS_METHOD','direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'WbUNqIWgQZ' );

/** MySQL database username */
define( 'DB_USER', 'WbUNqIWgQZ' );

/** MySQL database password */
define( 'DB_PASSWORD', 'crrTD7dRBq' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com' );

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
define( 'AUTH_KEY',         'zbRSK5R=9/fmuagQ+0~-_3_88;i,IndnPcw7ZXP5{w~LIfJBS@t+V.2_MPa2RS5m' );
define( 'SECURE_AUTH_KEY',  'F9l@:mx]IDuIZ Z!M9:jRHD%(u?iK3*A_=.&j=D==L#q0rmN& -UV<P$!=gS`&B)' );
define( 'LOGGED_IN_KEY',    'j4g_H*B<7[eX|=m^]ugUVL46VYb`s@gmc5,d-^zCjvL<Z~lXvI-R5u%m|OR9i<ta' );
define( 'NONCE_KEY',        'Mf`Z6]]DL!Dyp`a!hk=/IqwVyqNJqhvl0@pT,J/j^{mTDEPN}1dReb2qcL`v);U ' );
define( 'AUTH_SALT',        ',%7ZE$Bc?h|Pm-`fG;)gC%z)z[vYk%J@ZzpT`Ap>OLLwkZk|8)m`x`~HFX>]W/*A' );
define( 'SECURE_AUTH_SALT', 'U$8@bf*0PrPN@$1phiI$c:hz#az2Q@IA%/n:t,pRHMw0MN[[r!#M}Cd_>-ciEUeF' );
define( 'LOGGED_IN_SALT',   '3_,zQdD$X4[`P&>&xiFsMJrrg9z{=TK+(yJP,%C@Z{TfPg8O@yok*eB[<hVLn#-^' );
define( 'NONCE_SALT',       'v=m=,FiE0 w[.80~~oN_2|uc2eg|<q@g6=AzZpp=N9x8& ?S=4OJVU^;q4jQ]3j?' );

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
