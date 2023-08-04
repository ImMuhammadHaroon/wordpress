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
define( 'DB_NAME', 'my website' );

/** Database username */
define( 'DB_USER', 'haroon' );

/** Database password */
define( 'DB_PASSWORD', 'RyLphdVtiStMykdy' );

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
define( 'AUTH_KEY',         'v2#.a.fw;vlITgR#(9d85~4r[B< )U}FvEC$4dY(J8A[mt0Y,>*zo9L)ct@lC>z!' );
define( 'SECURE_AUTH_KEY',  'h3G=.H0Za6S-K4P@dM]O2^9^|M5Hpu7D  x8xx^Xj;LyFQFFHRus`er4.Emi999h' );
define( 'LOGGED_IN_KEY',    'c8%uWeMiE>&2j/2Va,EpDbj6K;yUD{cp>K(ZQ@ra&nH|serhaZb2)G+,[;V?*2`e' );
define( 'NONCE_KEY',        '9H6Bm>SUh.oTt,9e4Lz$iqA,? `ZVZJ1Dl7ZJ>.yqp}5L!Di&GCHNpT6UoW(y]!!' );
define( 'AUTH_SALT',        '~`=bQPj/?:C+bc#2qGt]I:q9V#C]4$~<=mh18log-fVd@[93XY+H#V:/V9< 414d' );
define( 'SECURE_AUTH_SALT', '?|[T:no-?w`3Xv8~=hM#/p4T2XJ7#S!8>;rIsL8`kS0f]G:+~t*}[-cJxfS+EJO~' );
define( 'LOGGED_IN_SALT',   ')}?IJ~<-_.43a$*{du8cKTp6jH~ldO-C_j`sIF)ENeuI@/h[EK*}{%}t(LHGBKlp' );
define( 'NONCE_SALT',       '@poZR~Oykj7&|o=8gP)f^])?lr@u8b:.XAhaYa88P!uA/_Xu^)x#6N{upHTCh${%' );

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
