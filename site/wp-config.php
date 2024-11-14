<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'luneby2024' );

/** Database username */
define( 'DB_USER', 'luneby2024mwdus' );

/** Database password */
define( 'DB_PASSWORD', 'K9G@^@6,{VVj' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'AI7E6*3(%@6cIfjltnd/|iNMAR`dR7UO6U0p#IOVK(,[nI35$f)%[%VFQkm~/4~&' );
define( 'SECURE_AUTH_KEY',  ';:].bxAMk=1U ,(jSIDsrwb;5,GC9j~U&7Nq)[N!JYg6a3ze0x-8$eC,B5K)v_va' );
define( 'LOGGED_IN_KEY',    'X(eSiR#`6L+Ihsd;,z(S[:zq lw!w*SznUFY_Cldaf&u09>)Vlc:5n+?DE<]k(7x' );
define( 'NONCE_KEY',        'Mj8j@Dr]zg`2Q%M}#Rn1%lgAO/|bBh4li,2,HS_zgvK3`uDGuzZ@YExX _;)LiRS' );
define( 'AUTH_SALT',        'p;XFYCG&&&oNUk{-h2(YCEuqk8OA3M##@9.Uo<Y}yU~r0A.Y:`EEXndyczV p/#-' );
define( 'SECURE_AUTH_SALT', 'ccmpjnqjvFRYJ3pO.{`RELZS;o%b]Umf%/qxaw hDopAg%$|D-lxv/:O+]w?YK,x' );
define( 'LOGGED_IN_SALT',   '?Y^]airTx@E^`WLWHisWMF82h0o&KS|B[?<XnB/<%B%g^)f|sbKj!++Na5:pve6(' );
define( 'NONCE_SALT',       '>Da^?bRF%wa8=E/::A>$hj]DVImztU.pD~t+3/HR7]$oFQ<dv7`@(^v|1E[WY8Sm' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
