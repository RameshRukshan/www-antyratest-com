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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'antyratest' );

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
define( 'AUTH_KEY',         'b,aW9my|5~p$(PcXr/+b6`6dZG>J%<u-moW1[&]|wYa.qDgik<XK+D`DIwYY$pr%' );
define( 'SECURE_AUTH_KEY',  'E7-KKs FYv! r-/S#k,13v31G <K-Xm6Weu/Nd$5ZEM:at?~$ehNjC+[s,++*+Jv' );
define( 'LOGGED_IN_KEY',    '(lVVc,`wtmUK:JvoVH}>e&D2<Bo-*6dW7z?_}}9$vAO_wfOKm+?x[<ulXuR~-7cy' );
define( 'NONCE_KEY',        '#qt@88ziZvBO7@T|jnOGY93mSka>2SQ:g3 Thl+EU_F98Mfn,ro=$PU-5l*hy!~j' );
define( 'AUTH_SALT',        'ae/#Bbc0RA|;c3<.VhXo7g/1Gw1aYOY#mV#TgwVQI>.LRf75E3,{_5*w9f3HEG]$' );
define( 'SECURE_AUTH_SALT', '+A8&,Uo^muX6~5NF`H1<{-I=H{F1GBS{$x+#>XrI0T6}|Q]{9<nG>ft1qB8UaJ~U' );
define( 'LOGGED_IN_SALT',   'V1/1v#mDK2`J9tr:9WGW$/Go:{qg_xnXKa~[[Z:Yw)UQ7V88Qq?1$0g;1CD9K{xt' );
define( 'NONCE_SALT',       'FG|Ro04B<ner@@z9)ptosa^VcuG5zgGN$5/o_La19=; ksa0o-^+MT)#E$fcRZ-0' );

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
