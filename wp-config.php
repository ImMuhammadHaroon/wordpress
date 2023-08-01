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
define( 'DB_NAME', 'new site' );

/** Database username */
define( 'DB_USER', 'M.Haroon' );

/** Database password */
define( 'DB_PASSWORD', 'jo)B*hz0.Hn_slLp' );

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
define( 'AUTH_KEY',         '#n2/,H2gYU/9R/5%Qum%90KrCJhL&xE868q5W<0GGRP]LD[#Wg7mEKZHf KzL5;Z' );
define( 'SECURE_AUTH_KEY',  'NGTg1C6^{1Y{U%rU hNp}Pq8)[doU+OQGV@/C88RtDtvh$xy5v4xyn`kCZ)2#BB5' );
define( 'LOGGED_IN_KEY',    'KhfHT}:sZb6Fg`C#t7FO+R.J3K]B4wU4Ztnk:&)]FO;M3m--Yi%DxY|.{5b-Dnnp' );
define( 'NONCE_KEY',        ':tNBVaT4HlF>ad%Bxwp^wUf;39/GA7o125W;1V8AEBg@$p#o#XlQoA@GO#E9X6Da' );
define( 'AUTH_SALT',        'CIU@R&uP}-2-Nj<AH;a~gEbi[x45 YM6U[Aep3)Bmr+<@gM?%^D.WtE6j`l2eOh6' );
define( 'SECURE_AUTH_SALT', ':d0p)gq}0M3<QCAf^5m1hfZU,eX@PtmqX,c3K[T<Jy<JN^LmE6BjC[;AL$bm{!8k' );
define( 'LOGGED_IN_SALT',   'FG5B4(AUq`hl>RcKHHK8Pb~eLpTP#V 78V%QA8Us(1Uk#2}PLPjy:F#8RnnfPNkb' );
define( 'NONCE_SALT',       'RL6lmg{sqzN:$)O1D}nS;mKrVC;L-wh#{uD;ytFYDS8iaJxyI@T}6@(mDiI.}po}' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'asz_';

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
