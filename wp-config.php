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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'K6U$4t$}0;Bcd:c4o:%P!d$%miI6qmE.?MvJ90SAp`u[e&7v%))^7RY06@b$SF^Y' );
define( 'SECURE_AUTH_KEY',  '-D|`!|z^HOTKjvG(zV3ECC2syhi{o8D7uxqT7nE63RC}SFU:xUDt86A1g`5 iyT?' );
define( 'LOGGED_IN_KEY',    '[Jmk87iw]t%)Ry<?MF227V6u>~ tX)5Tk7Wyivob]{pXxV:SSSB?h~1Pq[LN0QJB' );
define( 'NONCE_KEY',        'SyQ@aT>u+PZYK~c-d?w4+1tUG`70[X&UE}ACT.3]u>B1$d-G%gWg6s Y6wBii!r;' );
define( 'AUTH_SALT',        'ZNHT<%2GBtRud?tPQ}29lig]U5 kYRC`5%jElQ*(+V6ISKOi07ZYjll R%n]iC=6' );
define( 'SECURE_AUTH_SALT', 'fjR=Nr9T/jO&I,Oa6Z!XOH*pQq}`z<yg%I$gURONd(*@.GFX2tXvuJ`1t6]3b++&' );
define( 'LOGGED_IN_SALT',   '&?Qi*?c,I-o^JW+s:!iIP1Qi#{NdR-ND;Ks`}LGSJq^_|UE~L%@4}Y:.x?)2dpE!' );
define( 'NONCE_SALT',       'WmW&5#]Si<D-bn<&X>?t(<z[L9m4wD3DB!,+T.VR^m)&CWFQ}QqrT[5h{Q8csQ;k' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
