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
define( 'DB_NAME', 'final-project-wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'takpSdL-L@PJP6) z)B8E#e+MtEtY^F<qQNr?}whN;+H}Q6.HrLRAX a8^Y{cjUx' );
define( 'SECURE_AUTH_KEY',  '$NT_Z_;>kgjZJ0x};NfDG7#.|ZyU}?fy&h]=#}9|*^;/;~y6~MQ;WtB<(ws%fj,I' );
define( 'LOGGED_IN_KEY',    '/y}Q&WEpsL}/?>PAMSR F! CY-qF3St>gP#08Tp@f&&3*+H#We0,~K!?6)NLaKGl' );
define( 'NONCE_KEY',        'S%:{<e._UgLJyKT~ab|@Nn(nc|E%sCZ4!hWuddOZ|``Eb8_5@P )a+Qqev=EtKp9' );
define( 'AUTH_SALT',        'Mwy-iQRNPc9^brXgIH{wN<wl&1si4ewjg1s7>N1 &OE$x)j<`3K_ESNl`l3|(iN#' );
define( 'SECURE_AUTH_SALT', '+QZsJ&t/2I297^&u|0%*=Vfnrij7KF5_NBsfDr:A.@r$&xysl;bV6jFN8DRy9BMP' );
define( 'LOGGED_IN_SALT',   'kxpQBP/$;vlK2O%XP@Bf;-q{mYr5#,vJ?E3` +bbtx[P5;LVX[SkpNJjOHXC@99Y' );
define( 'NONCE_SALT',       ']bcypPI|Z$ K]p!yr_uprK0uzhlvC|Pq^]eT1{KG*x4GP:->7P5e?^;LZTkL(F++' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
