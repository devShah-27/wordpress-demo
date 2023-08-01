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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'cOz2]gr(oOfS}K ?Zdh]ZP8UaVKx]JfEQ5)l-+]D_l4`2?wG]wfB/+PUMPE_kHs<' );
define( 'SECURE_AUTH_KEY',  'AqFxH5j=w~b6SQ~<KRfgD:H}sNs<<G=&uCPJ{O5UUgXHey(Hb%A@lnr9s@,B3Bb0' );
define( 'LOGGED_IN_KEY',    'kBB;BAF[f-NK{E,9^oX9Ua1i6-7 }.^J{,.}|hCiHE0x]FD3Kc(EVePLp@/RhlP9' );
define( 'NONCE_KEY',        'N2~MPI<ec[hej(!nPtE3/d _i}q7 e3L?@ll?1,8fX;-Btw5zlX|oI5}=#kWl_m0' );
define( 'AUTH_SALT',        '[[/3,E%bz?;RZ:/>R,?nV]yv$JaPQlPdo+W+<W@p$.yPl<NlA<|]t--J:T(bI -T' );
define( 'SECURE_AUTH_SALT', '/|!!o#f`_@z;9xsOTC}+VvBRSqic]+1?avV$h(-0KRN{Q@`1&cZYRcQI2R|+@=wk' );
define( 'LOGGED_IN_SALT',   '*$a=+JZ}VzU_FJJ{P$j JdS)Cc`Tpp-e2u`6Q#,3>(^A?kLF;O-baP4P8~@>p]?8' );
define( 'NONCE_SALT',       ')X<$I]rXP~u93A(,QwUI+8[Bit8%ku@mR.[yq2 dx;1a [t6#oJSm4}m@<AGZX<a' );

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
