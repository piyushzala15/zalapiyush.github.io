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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ',;xk_z+8B|OwQLb,X[80;Lj2{|j`Crt:u,*WPepWKyka>A |i&9ghT@%SGg5OQ~5' );
define( 'SECURE_AUTH_KEY',  'PEFilfAMXk,q?c6cd7qrs>0@cu>jczSP|u>Di`U%p}^U^SI%6Ud9yKz(Q15VwkHo' );
define( 'LOGGED_IN_KEY',    'QjXiB$l/!%Yl/)LGbl4(9PE+zCD;crQxXc>OUA9jl<pE9H|I^[[F7)|>}2Ek/]Rj' );
define( 'NONCE_KEY',        '=)1*!>$8d_Ie{)1+t{vYtR&@c>1>vSP0z8U8vsInE9WW>>Bsj~oVVUgJ[1fm[5*]' );
define( 'AUTH_SALT',        'v;fi]sSgT+&z2~,d`ZlI#N0iD=iFIDug~E xNmTO<&F |ts*nE-tv/1l($Lef%.K' );
define( 'SECURE_AUTH_SALT', '3v65O83qL&~%UY?=;P3FaB(f6&QW]Rb)y&IDw+w64lQ+x1)kc{b3L1t>E[A%K+CK' );
define( 'LOGGED_IN_SALT',   'EaE2q0gd{o=0_S:R-^~X`{^bSir0Ez<[e7hc_KPZjR!UD,s}9,F%(3oDz}gnd[5.' );
define( 'NONCE_SALT',       'PA4?jW]N!8a eGpw|L;8t3&%2v[z5EUXF!L#J>%[DEO{a`=3)+*s4-C&5BG6iEcu' );

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
