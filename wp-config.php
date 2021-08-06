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
define( 'DB_NAME', 'eclipsedb' );

/** MySQL database username */
define( 'DB_USER', 'eclipse_admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'gJxgB0zqrG6kF2mV' );

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
define( 'AUTH_KEY',         'P)7oVDXz W>t;-H;<C*%.&Bx!_?v,1mcCgDgjEAf~X6f}/;F#<<WlWnO+1ztcm!#' );
define( 'SECURE_AUTH_KEY',  'MWS^-2_31/SUIA(=u&13bYf/N]%72P,`{N[PNE%;S~*V |:ic-YaAH%NUu*vD$Z,' );
define( 'LOGGED_IN_KEY',    'jb9BY6/JX$|>~V.W0Xl&]2$AgPb-J%fZI7][1!quI_pKZ2]p2z |0FVFA%%R=XuP' );
define( 'NONCE_KEY',        '>*+4Kn|ciDABp)ZYvl;I>^W$-o[Ia!MA#T53T)j(w4wLYRIfah9Bl Va.!u>Hxzo' );
define( 'AUTH_SALT',        'i4f<KW;bWJccP:1T$PC+L8DTp FG7M ){%uNkr54*x39E$2mX%WKV*Rn4p Nk)>p' );
define( 'SECURE_AUTH_SALT', 'jWBz[[,!*f.cJ%gKlSswZl/xod8xv+3-e+uN 0L7`z0x~CbHY:*5C^vE?.x:aFkM' );
define( 'LOGGED_IN_SALT',   'ebE9sDKP(D=&m9}_hu//9wOD5m83Zt-ZKYMsk>)/>O<&n+daMPT8wr3S$ufL=FO&' );
define( 'NONCE_SALT',       'Q^@{.y-*)9sQW}*KLqu%W C=3Wq/|]wm$?6~%C/&JjRG0ey[+Wy[Q#gq4{Ni|Oex' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'eclp_';

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
