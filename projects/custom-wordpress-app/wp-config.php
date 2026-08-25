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
define( 'DB_NAME', 'custom_wordpress_app' );

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
define( 'AUTH_KEY',         '+}wb%.2rAsxPy(6un/C7_Lbni/l]lScRp2Bq0y?|X0 &t!&nZXPMQwgQK>&,7nZm' );
define( 'SECURE_AUTH_KEY',  '.7s(AVf_y<SvtKczB~x6^rMBMP]skmP@h&;&dF?1.8sTOd<,rA :5>uTpu=/P1ld' );
define( 'LOGGED_IN_KEY',    'u2n[WLetm{oe5j1BqbHnlNwDxb<wwYjI!k@PfiT}qG7*H/y3fgAz|X0dE?)qSxJC' );
define( 'NONCE_KEY',        '_qE .:_e}`Q*wTlI-26b?6(H&$7,MOGEn1yM>eq%}#6^R,C#8a2P=&i5icR0*9nk' );
define( 'AUTH_SALT',        '1e>8>DE5I{ +ha@$_!h9!6EGdZ7vO0>[[ y?N<uQFU-1K:ur]Ap-/ZHcxORwQ?SA' );
define( 'SECURE_AUTH_SALT', '/AxY$zW]P-1avNtm4B)T[b;Su6)KoA3aeILV>.aFG5g^[M#MZtK<:6nnrH`ji?2K' );
define( 'LOGGED_IN_SALT',   'jR<A.,t9UHPTe|o71hzfv3R?0tBd{TmNdQ4dNv/q,KzNRjGICL--GtK3pZkhq1>J' );
define( 'NONCE_SALT',       'xI,_XpAkYSUHv*|@XdWT4K8g~:H*at^1/-9!PNN$2i_.cP6Mhx1xq!kf)%>,V4i2' );

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
