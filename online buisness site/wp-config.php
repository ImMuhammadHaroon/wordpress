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
define( 'DB_NAME', 'online buisness' );

/** Database username */
define( 'DB_USER', 'HAroon' );

/** Database password */
define( 'DB_PASSWORD', 'cuvas1234' );

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
define( 'AUTH_KEY',         'e5&Vg3i;/0<!#U:a)~aPU_e8Uq^v6gp45M5=IvC#$i60WTb=MW)z$+]WuJ[_gLsL' );
define( 'SECURE_AUTH_KEY',  '2s*YN</xYq+z}Gj8x/0V#Nr AQ.k #Y$f}R<=eO;<q+nl)X B#9fgQRsG::U)>V2' );
define( 'LOGGED_IN_KEY',    'i^C.:c_O,5cE)?UsrDnM.}~1fmTF7bV}aD0#:wg4#q8do<{w&u(oh[J^OENSPAfs' );
define( 'NONCE_KEY',        '@[sggIsvh(+|X^{L0-Mj/5ddK*?rW7[t*-~blxOD}7/<jS]nz4dSfx`.6~AMLFLY' );
define( 'AUTH_SALT',        'Jzp$-21}zGMFw#J$SZ#x4&Gv;xxZ@F)VwbD1uIwU<K(ya>@@JQ*l*nJuj#@XN(TQ' );
define( 'SECURE_AUTH_SALT', '!xJjrk>H^J[y`LP>Ks=($*c6J-ovJya[fX~,0tk4D$C|*a3kg`[GNwPSM_S#z:5#' );
define( 'LOGGED_IN_SALT',   '5T2BdJ=pT&vLs5CwyW5k+H92f8|h~vk>]8u[;:BR1>(VQFWu_F&S_AQXQ1!R2*eY' );
define( 'NONCE_SALT',       '0_ xXoV2e% #X>5}bURVKD?bR(Q#)0lgON8U+S2M^.sv5$kTYk#VQsc81`CM#1X&' );

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
