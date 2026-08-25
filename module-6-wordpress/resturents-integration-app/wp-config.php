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
define( 'DB_NAME', 'resturents_app' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '&krEd0+(>8xd%,`V]#o>+,^<>6{oCH!${Yy{tsUr`:XaBu9#D?6K[H3RfZQAf<L ' );
define( 'SECURE_AUTH_KEY',  't1DnK( UATS~K*lSbk{sP* 4x=p`JeP>X4<=VH!zwr:$>WP0p`?:yWhPm5E[*[W:' );
define( 'LOGGED_IN_KEY',    'D2-5D@!U85aY<Ydo5DjWp:=uiq#lbJ:/i]s&*@X/ZG`<`GN#5=URZUg9?|Dp}y`A' );
define( 'NONCE_KEY',        'O0)QNZP`yF9x[i11 edIhEUB{/<ln?(DV,SQE#=YitiUER_DZ9 SO^71b7C(m[:a' );
define( 'AUTH_SALT',        ' ThvN(~QfdM;]4^&#b3,W=.*a1&B{LZcKurP]m9|9|:`$Fv1;FrqeSe(]`YHHJpN' );
define( 'SECURE_AUTH_SALT', '1fT<-]Sj/s%x@DLl%R_!HX*ctMzt:w-07L~o&O$;dgfJ =?4&l!&.y-9#d@[# TN' );
define( 'LOGGED_IN_SALT',   ')I.0LY.{O |IX]F2m&DR_i98-~Dw@j DJ#`nH}ld-GZ[KE:@GH#vnH@,F|gPg~Af' );
define( 'NONCE_SALT',       ';yU,:3+.25f*lPwx}d48YQI2+WT,],KF74OUzcXzpq]wLuv:Nn~:I<%(cypW+,T-' );

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
$table_prefix = 'resturents_';

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
