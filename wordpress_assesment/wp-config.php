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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_intern_assesment_db' );

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
define( 'AUTH_KEY',         '~I*}Z=xzA-U|1]YlEfxo>:}$*ejV@C9VP]oXW`:{rl@x7:6][t1FXB}D<g.VQ)@9' );
define( 'SECURE_AUTH_KEY',  '=0ToNtvxd6_+50;q@cZ}/;ZvI4RwgfCR_JG9N|-%tArZN69_-d;NJ]Yms| h/SDM' );
define( 'LOGGED_IN_KEY',    'c6&x=+,.RN6KXY7QmhNSWA!@)a.gFmd6M,X[|Q u^;1{%OBLNJW`f>X=~mpN):m&' );
define( 'NONCE_KEY',        'G8k}Bd93V&SZcw_U+B3Kd{e%(qI@(*9ijLpq/}|dzR %7/}4TQd[.s7w|I^+qh_?' );
define( 'AUTH_SALT',        'tKE/:+1eA1E?r^F|L8?$9d8G9aO6TeMZ-bIfq06`t,:$41r8b>05[5w5drk {Ro6' );
define( 'SECURE_AUTH_SALT', '>_,AL+LQ*n6vW*gXmL/Ei=.XcFLB%NAywbq=J@~(1..)k`V@/fB0ywDV}=`/-x)]' );
define( 'LOGGED_IN_SALT',   '0/<91/eEZ-:D.-YKY:C?[6?v >n4gG4iN|qa i??{p/+2K>n~usa(y9;hUVm}wZi' );
define( 'NONCE_SALT',       '7jQv0A[4L#)A5JHd{RS.L78MjA-I-~EmK_31sC{VY}JC1<jf[5. *8.Bj]3H;1h@' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
