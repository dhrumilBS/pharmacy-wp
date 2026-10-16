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
define( 'DB_NAME', 'wp_pharmacy' );

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
define( 'AUTH_KEY',         'SNVoq(P:`P_&>)u6OWm=-}pJ7Vg p?@k3<C[R[q|({Ift@uY}X3RFR8=tJB*;d6h' );
define( 'SECURE_AUTH_KEY',  'PkC}=j#HRx>= Fmngu!baF49sue_~G7{Ids9pMho|BsrLQP+%<7-.@oP3x4lGD&8' );
define( 'LOGGED_IN_KEY',    'Bxw|iPDSAk~n<kA%0HX-@|tC!FeSHKH9AmgyiDn4Opd`7??V68`?:,J2s6wofMX3' );
define( 'NONCE_KEY',        '[A~O84A^clty!F5)1c.M9g`w;./57U,7-%[})h7=9IU-3POBe$|?_l&x1Mn9+&b^' );
define( 'AUTH_SALT',        '8)<`oudD/>g4FP`f9t?#ru/o#3E;~sQ2F/}t9=Pn$lvJfg6j8%xb=Y@w~.XO{AK}' );
define( 'SECURE_AUTH_SALT', 'MxwqDC.(5Ry<P46@Anpgj+~{SCe;C_~f%)a9kbO]I%{~x//w`Bi)p[d?Bs2EmQQn' );
define( 'LOGGED_IN_SALT',   'T=nr:8[C3|g.@34]?P7EAg^8Bea0u6t@f:xiSl6Xz!kY=+OQAwF,zx8xI+sjRI*8' );
define( 'NONCE_SALT',       'K5lW7@[A>@V ON#l] i?s|!TSW)PQ$21Ezo0XwYIo_t0,*Rq)y^@c@#zU0ac~9=s' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
