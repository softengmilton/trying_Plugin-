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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'V|.7?9F<zwzFp?o^7qr<6O.|I]?S=E[qq_Rpk{FFnv:|+q%vhpz<<K[G!->bF @M' );
define( 'SECURE_AUTH_KEY',  'D{LV;R56& a<+2,x%-9P,_fcljE y{=zYGWu;-Lej0]GxbQKLW.6N;Hqt9qs(&=m' );
define( 'LOGGED_IN_KEY',    '|zh3B#9cw3/Sm.H_4GF$.~.a&t%@hk9YEiEQ*. Sh%8CXABpQPB05affF-:_vfce' );
define( 'NONCE_KEY',        '6gR$pH7zqG./f?95oy ^{,~j66(}_KaQ(kD2*J7yH5SHJ1;t-Gg=we<!hO~S?sdj' );
define( 'AUTH_SALT',        '3#2T12qA<qd11T+6)jf#n$?TJT^TFz9V4Qa9BR(# G^b~_d(n[OR.;-r0y[DKQR[' );
define( 'SECURE_AUTH_SALT', '/}GE )r!nK@Q|xrSW EtOyzkabJMxTq(Ye@S#L.v+va<h(xSfWTQ:sN9(q-abxid' );
define( 'LOGGED_IN_SALT',   'Q^~+x~4=b@FXUF]:V*LD2D?jH,S1<tRnx:hZxK,Cba!{Y+%-5FU@u,Wv+!B{<oxx' );
define( 'NONCE_SALT',       'r {2-nKi$lb@EP8tFGvrC7rG*uw],bE`n%.phzDE4Rj{ugQ>^*8xRQpI&pHD5i5l' );

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
