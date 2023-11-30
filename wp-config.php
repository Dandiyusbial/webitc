<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_itc' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '>jvc =qWB `f3pGA7F~Q}ds|f=/y-K2g8#{<j/i={i%,FWY1W]@52Xu8S+*C9vpS' );
define( 'SECURE_AUTH_KEY',  '0#^N[S?dbpdhHF;$nqXvU*5[aHqJ2KWE :mj*d K)fXJ*(7T@HM.kt]W,dCvq0G+' );
define( 'LOGGED_IN_KEY',    '+,Y*e7[VX0]3|lU|$MG>#b92]oSNkv7$AnI!#Zu[fLHh&n0%&Mp!b:0L|V%]?JP)' );
define( 'NONCE_KEY',        'Z}LbFZq*<Ik? nvnUr&oJ4}z*m&Hdrr<MujnsX8Oaw>]mj>VBs4QvXHosD}W)d8K' );
define( 'AUTH_SALT',        'dR!k{x?h.h~.M[ba._ED*hD!FLqx5O%ZVVFI.o4tuM}@2Kr$C!AfVS;@O@D.lEBc' );
define( 'SECURE_AUTH_SALT', 'uP9_VTIcaOUn1B5Wgy72B93oEh0s0Ubx7{yT~w--uePcB?S1g^r:BqU*vq~ }@lU' );
define( 'LOGGED_IN_SALT',   '=vjP<1e g@l<;A+:*?Hf3/zPjO`<z8Pge_?fx03L-oV<`LTR9)$<p?7*2Y25`oyr' );
define( 'NONCE_SALT',       '7~H37ZWkX+tQ8)fmBgs>mR-|/=%+!Y=ObxU?b!ZtT5@?1oR&l=Eth;~>Dx@{C`?o' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
