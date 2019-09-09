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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Wp~_fS9u//M[-0$iqS{.mq*,0CU3zcnRC,k55@O6@E03m]e08B!lE*x$*n,BdWB5' );
define( 'SECURE_AUTH_KEY',  '#Vtp c:/Eh(gy)n=8e,nd7x<cV7a8`Tr_y2}qzwEJ(}sT^9Qu2W!<R/?guhjBv<H' );
define( 'LOGGED_IN_KEY',    '0 ]R%KVE?U+HN$2Vn(6GXxvrVQQW^JiDwXpMn9&@l{E+,N!.BhlhBwktJS&PORsV' );
define( 'NONCE_KEY',        '8Gy{c,2C7)*XD^H+w-!+D]xCej9|kdIcER^mQYz(j/A~=LWJ)<{mN0*fI]N|h7c*' );
define( 'AUTH_SALT',        '`oTM.uw`q<%C7NI+8z[][/vrY8Y8WgAk#|`6dbOQ(k-6]5Gw.CR)@<Gr^Dv,h}/z' );
define( 'SECURE_AUTH_SALT', '`Meid}d!h^%S#.[@v9UkPF8 Vw#=`cqmzC~`zL:YfL_9^P+zH9Fk%+dWHtbE).Zh' );
define( 'LOGGED_IN_SALT',   'f2$fT*bvWDh4Bp*9Td%LULY^e(tR!qY4)<kis0HM/m@Ry{Q~P#BwUoB,=@^WgQZ%' );
define( 'NONCE_SALT',       'f3U1lx*eJ/6hZ?#~aM~xa0`}H^Z.x41:*t>X )a/D`_qldVTEUwgdgNx4`UGj_NO' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
define('FS_METHOD','direct');