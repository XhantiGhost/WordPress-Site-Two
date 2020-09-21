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
define( 'DB_NAME', 'demosite_db' );

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
define( 'AUTH_KEY',         '6OQB{ffdjXG+]JaO{.cX:{9TzaJgwhA<WBx2vt.<nh5x@};7q~%xQBXSCuBH&n15' );
define( 'SECURE_AUTH_KEY',  '}V_T0x&hvj]2U.VZn4M&48O?-9A im00~g2;q|i)z0La=[|:PV)2PR8W_Z<)<<i>' );
define( 'LOGGED_IN_KEY',    '5pA[_W{qq]`4cYFiw9D%41;nwo7UtJ!-bSHyKk|*DL39|Qb)fy! (}wVea_hAc2c' );
define( 'NONCE_KEY',        'pg2QN9@Ca,ng#BCcF>W/|O8Af:1[;o8j(:Pg$+r@Qq2<)cc[8/3Jn*%E9h`EF(fX' );
define( 'AUTH_SALT',        'ymS9rIP8!*uS]+fZ,&huyN$3_Xq_yE<qa:Cj|e[sA6oVmq$Wn~y_71qC_ImWSJmV' );
define( 'SECURE_AUTH_SALT', 'wI+,iy-_g;tx1Zpg{Ro;SJ /kvfLp;*o%UCO z1/vwr5iv1Dd(yHJ5L5nupQ((jN' );
define( 'LOGGED_IN_SALT',   'Pqvcz<=Z#)}I`><f[HDE5mfk|qw1R4MS#VQ7Vq^^{33&ffW>Mp*)>)f[o5z)e}px' );
define( 'NONCE_SALT',       '2(4C-|[O&XmFW$j%,=d9t~@Odcfgq~@KfkJxEaMd1Y2X5~V#cSY+tv025huNac,8' );

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
