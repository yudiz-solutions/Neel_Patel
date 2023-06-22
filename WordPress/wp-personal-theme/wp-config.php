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
define( 'DB_NAME', 'wp-personal-theme' );

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
define( 'AUTH_KEY',         'k5 A{P{b7<ijk{UOtq:b<!.9U*>c:f;Cw;YBUoj(qyq:]p&&hc 1SA%U!%~A~d&C' );
define( 'SECURE_AUTH_KEY',  'AW;*|T+PG+9EI{n8Ln2p1&BImH.AZF!W*,4I8Ft9+{|Bm]%dyGM2):9kLUA-n=(3' );
define( 'LOGGED_IN_KEY',    ',W*VYpy0oYgtsoMBw9)L #=(G9!h77Ga=#x.e|a^TxoWL<poc3u>ee.-<Uq}?p6d' );
define( 'NONCE_KEY',        'HsbyQ9s#fuL!Ik<uKZbh1~ukH?}F#3pl~M8.rh}orfvBmHPQe>TppFNoXiFF>|,L' );
define( 'AUTH_SALT',        '7StBOVvj+9$bS|0o(Q~f,D$^4UW.*]m?9}+PW}W>DPK#.aN2FOuBdQ-=KOGa)(UG' );
define( 'SECURE_AUTH_SALT', 'Gv-CGJVl.a0QyZ%er8Q5H#z4Jj~z_>-j_6|Zflo,Ae0D62X)Mj&}Aa bY?BBv%oC' );
define( 'LOGGED_IN_SALT',   'S_f/rikY|a?S;dswrR|[i,Ol*oR@0*8Wtn~miM=)G}4pITs[YY=;{ieETR~-|%=<' );
define( 'NONCE_SALT',       '9MzAh]PCkCG?RDvZgCf.JRr%%.$<)S/QLIt!(KZ,)2Jp<tTr<^WN&cZeTmi!R7IT' );

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
