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
define( 'DB_NAME', 'malitbog' );

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
define( 'AUTH_KEY',         '=B(NP98knq4v=nLQ|`q?SNJabS:H<GyiBN)o4x1Cc/7D3L,x0GBntpx!?Ew^.~$H' );
define( 'SECURE_AUTH_KEY',  'H6fUxJRdB$Z5t=8h(X!),NQWV^P:,[?[UGPZK{#p8`^ZO#`=.>qnTcm8*6W& y}s' );
define( 'LOGGED_IN_KEY',    '6J|4}qc0we{Di(3%EbHP=Z{+@$q?sU?Ui-9W~`6U|>d#fKvw9kSgYa|SL|iR{S_}' );
define( 'NONCE_KEY',        'Z;g-4Kp-4W*d)|1vC>{C{eY#J4U~)- /2Cu=S>d*TvCMxR?[O/Y}:-N$<3;C .(H' );
define( 'AUTH_SALT',        'ON}i7bXfD0!T=`LYP0qCbj 1fa*{G<{K-rnrK`~c>x szbY=I=9aQ.NtUi6%YD+?' );
define( 'SECURE_AUTH_SALT', ',Bwa~8kK&RBjxnGVV()`{^~qr/%?Vwr)S^OyF85YW6}}T7O1SpXxzWV:D9MdpOk#' );
define( 'LOGGED_IN_SALT',   'J_pAp#E;,v^B&7h}Cy4DY QY+g%=BM8p:jeZ$d9ZHEFm8lE6RLKX*8|5%BH.F#2 ' );
define( 'NONCE_SALT',       '{AYWOqrPavE Yz==vy@i7e*  0#YDs;zJ+0?lsBh`958H+_e{vSlcH`|X4GB^;U1' );

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
