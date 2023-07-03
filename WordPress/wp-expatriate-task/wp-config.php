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
define( 'DB_NAME', 'wp-expatriate-task' );

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
define( 'AUTH_KEY',         't1KKG|&7HFVqK$V0)UmngL.-tf;gs&8Y:n90/*ZMSX^H>DK?zsarjBeYH+g-M:9R' );
define( 'SECURE_AUTH_KEY',  'r]$y7oF1y].`QJI^V^Ux:k{^/9ZRRs=t?(^A!lrM4`[Lbn;y1~,]Q@djMk<m/kka' );
define( 'LOGGED_IN_KEY',    'Fd&i^VH~fbC/Z/+`k*TeZDG8e?l`}M2=]?Hr3S|+mh_e8X+eEB%H:;NJJNC~|%k{' );
define( 'NONCE_KEY',        'que{fF/Z?(=<wrxc!wn:@<oUn8/1q<}-pp1 <qT]Ro%5=@]fRZA+nHFNI{,+#A}|' );
define( 'AUTH_SALT',        'SgU5JS.wW]^CMIvZ5J`X_<M +a2L^EP|6JKDcdRYLTak@.gc.n}vrKJQX9S4G^#o' );
define( 'SECURE_AUTH_SALT', 'zHVg-=Asu-4~j7zG93C,Lhy]w)BzE$7cB)YO{_@0bQm?m]x?]I:c<PF4P^L.9sU7' );
define( 'LOGGED_IN_SALT',   'KoX(HMF7Mb#7{_ijk^U$-%cQlO8whRCx#{TAfzYX%W_LYqC0rK./U$:`%TqP>9Kv' );
define( 'NONCE_SALT',       'a6rHyO:M:(A|bs%5UIhE&cJ7aS0M:zG-;F1<Cf<Lc/ZZUgBbA;xtwj[T^z)6Cqz0' );

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
