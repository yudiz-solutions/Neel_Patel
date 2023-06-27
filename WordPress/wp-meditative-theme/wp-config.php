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
define( 'DB_NAME', 'wp-meditative-theme' );

/** Database username */
define( 'DB_USER', 'n' );

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
define( 'AUTH_KEY',         'Y)Jcxez-(&tb|[|fN#o7zhIK;*O4z!sV~gN[[Jye*zqJA;0gTctx@v?u;Du,0v:?' );
define( 'SECURE_AUTH_KEY',  ';`.8tw]9,k8V}RiDe=<}mUh@j:U4hfG/s7>WuLB(LS[S;DO_W7(E$(xdXEDJ6u,O' );
define( 'LOGGED_IN_KEY',    '>.1Z&##x~y;eG:i(S$pVc`5BsCxT`iJW+i 8MFOTgoi}$(x?u^=&~&&,ia,nUUI%' );
define( 'NONCE_KEY',        'y95gp6kc!^g4Y eLk8uA>]ri3lV,SQ8@2ynF3v+wf%*Rx#?F/;-fWV[2s.{J(`?4' );
define( 'AUTH_SALT',        '*ziZ@oH.(-I>0|5S<=0bKYnoj)m=^^mGt?/~_;!9nHk7`^]{^iS$0nJD(CxWV]4B' );
define( 'SECURE_AUTH_SALT', '9RoJ:HP0uh%qRFZYZ3)f(K2Uw!Bj&YW*<S@.c=b>$Z4:Cy-^qCk>Ff]UM04tC+1N' );
define( 'LOGGED_IN_SALT',   'ML*GO;}hD@NFyN}*`Ke>3x),]nvsteoIi14*z/r%bUoE7&e8=Z=nVm7?n5U[n^n%' );
define( 'NONCE_SALT',       'kBJqNBa{,=vD(n:+Xi:^#**)BK]7bF ,{?q8,%]T*S(HDrB7WcOJd}sX.GPss|!{' );

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
