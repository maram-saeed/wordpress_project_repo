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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'p<=mNemA)kC<67pM*tQj+w53BR.QJW/G3iOYF&-Pl2W_y]8pKMXfOdryy4H72`i5' );
define( 'SECURE_AUTH_KEY',  '#*fA6]I{rDJI;tG#[oMHb2epX3.N&.X0gB517OTk}U3g @EtX<Gy^Nq2OAvt, (l' );
define( 'LOGGED_IN_KEY',    'RwarE? 9;Y;L3X#>BL#2)W^Q[G;`pGQivAo<aZ,N;{E>R(/:`c,Y5Qf=w`<58QHc' );
define( 'NONCE_KEY',        'l.]$sP}c  Db{oC%pBl!64hE^N=?_Y7.Rg2|@GIZmK2#yEI%iF?>3$)C`~>K,`HJ' );
define( 'AUTH_SALT',        'e);6$E@M8avs.sb4HCM=$gzFp|`U#0CnF%d^tW5X@*]uDe5&rxa:KUQLO&Xf=7LV' );
define( 'SECURE_AUTH_SALT', 'hJ9cvu.!cC0~lVM3v0:I2SR,Z5g>S42*w6)K.1[ C@$lm)s+5&4!*m?}e2|U0L%#' );
define( 'LOGGED_IN_SALT',   'iz,7)+;(RvEq:3a79z{D<kYG}-.a:6c0./C#^+~:4^onu:`|UqQ9bGn.9uF]T,-i' );
define( 'NONCE_SALT',       'NS1Fk6wWA(&?VPun3oS2eVA~<-w/e*fkJTPuIgyM3!^amg{=a xK<}JCJmX;hi^ ' );

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
