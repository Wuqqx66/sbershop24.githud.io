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
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'uQS,%}x7x0f-N[Q?98{MUM:Vh9-/UM20tT9;A$$NFVq8a{Qo]ZGm%W#d$(6K61^;' );
define( 'SECURE_AUTH_KEY',  ']#n7MRYwi551=otmd-9 5.>=M&wbUC!MVu(X5lJK}I+NL,B-)=>LKbJ(Ir6=Ibd1' );
define( 'LOGGED_IN_KEY',    ',*JV*D:,~2.u,Yo!uW].,}>S&cZBd~E5sFhO~cx3XR;Ul(h|@,}JO~g.KkO#x!fa' );
define( 'NONCE_KEY',        'wRh7tK,a9csJKNiz<X8cH&>R> `dk1g`u<i?)_JmhB^] qx5?1%$=vj7LZ|eJfcU' );
define( 'AUTH_SALT',        'xdYyTo{-N<ItL7]@+vLPZ-$Z4TofR-dvc^2()>VG!GAfux|^tJk2hp=>xgj+()io' );
define( 'SECURE_AUTH_SALT', '8Rq9pXtgE!ut);ozY:8KuEU^5({56=%zFP4?VaAXSFWLK)m/?!C>f:,D(Md:pg?H' );
define( 'LOGGED_IN_SALT',   'fZ:>,no~sUU Z:;tvfZ{Kk?5j{}{ko|1`+{f%o*+hJDmP;=e Ixoop;`A00v$r9r' );
define( 'NONCE_SALT',       'R5&Kbws}SVVFh,)3*lP KvRjt^s}|D#o F-*xbBGQ[1~w$h;g}=D?{Q%}!VE$,u}' );

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
