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
define( 'DB_NAME', 'first_site' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ']K,zJSz;NwTm? #1VEmk)+eF+-L*T9Ihm<&5H+Gn6 V/nX{oOd)>sfW)1]$>q/_x' );
define( 'SECURE_AUTH_KEY',  'n)CIu>)Msh01e`EJ=q#pG|~W3XEr{Vl|+IKGn&Y&zuX;h9LTxaSLI3bdi/@eFbY8' );
define( 'LOGGED_IN_KEY',    'BnnV?C! 1ULYwg6#L?}]oU_U16=d#1#5ipHx@Id%P!Abrs,Gy`[dU _OV9v#IQnQ' );
define( 'NONCE_KEY',        'g+:jAf2&q<TrAy2{;Q(bs`1*?8,dbL:ak_YZ=nSEiN$h$;5HlMX!].>g6amBAb+C' );
define( 'AUTH_SALT',        '7!`-_985DNE(#S_.$6SMOv7/>y*<7[9FG5aUmYvN5w!Gjl2uFv;s,I*kO::q%@||' );
define( 'SECURE_AUTH_SALT', 'H,xxfUK8J?lA4qU`ab xpk[xjQJANCkJP)SxIpnRB# xi%kA#5%T:437G!|0^U2a' );
define( 'LOGGED_IN_SALT',   'gvTZx8UVLhjNHE/BJp7gk!/>cv<~OM1zfc#zKWA)c-] FWW](+GsET1-i].Qr]k_' );
define( 'NONCE_SALT',       'FGg0^_aGeSNe86d8^s>}65?O$#;/z>dY=-RF?XYv$!58$j.s:qj@n39E48i]l]:O' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'first_site';

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
