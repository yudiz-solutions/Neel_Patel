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
define( 'DB_NAME', 'wp-blog-demo' );

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
define( 'AUTH_KEY',         'AjHcnv zsC]x!TuZxeC_D hdb!T9nR_L{b.&$@o<ww3k%r0XNOz%C|FMm#_|-MPS' );
define( 'SECURE_AUTH_KEY',  '*hUvkDIW%6Pd{ZEZQKpmb`gJO~gp|_Az54GP!jsV}$1!Yvme_4O~C2)@s(Q#ULg{' );
define( 'LOGGED_IN_KEY',    'D(Q6j|-(,T<Jw`|Iv2 B`3CJ+3uGc-9t*M^%-m<./q5s;CX]R>yoCk(=jaR=Q$/ ' );
define( 'NONCE_KEY',        'En!G/)e~rUm1 qS{Sk7jbEM2@0b@s{?_Ga=ow&%25t/)R[[[{XtfI[3s=ZJ;d2YR' );
define( 'AUTH_SALT',        '$od$N8F1zFm9Z0^y:(?DgYU*6qF)z0&dwB]5krDgC}%S<&od&m:qKnvMre`!cpi)' );
define( 'SECURE_AUTH_SALT', 'OFPhFrt]1_X^^tLhQ!t!bdDvzQ|.=RmtjApCnpBcM&0-Guu)?UrPuevFLc@`Jy;:' );
define( 'LOGGED_IN_SALT',   '{Q#N#u:T>U;)`j[CFc4-OH@4qleiy ;rLt=4{qBzKDlkO]V^a]:Njw`kui||Sn{k' );
define( 'NONCE_SALT',       'wKxl{nA7,&qHh=e~/Z3K1&bARQNadKoY:k=dS?>;)kfES;_h8#(:=uIX16T4nh W' );

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
