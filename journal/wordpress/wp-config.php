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
define( 'DB_NAME', 'yowjerry' );

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
define( 'AUTH_KEY',         '9RD}Gso-Dsuqz6b}:l(#//1mN]3uW1:bJW$tygf!>WMDL;}H{aOQ>2nNn7,H~ 56' );
define( 'SECURE_AUTH_KEY',  'e~|MEoLH>pNOoSw4hfWW}fctkMc0A{& &^E@rQW$!SJ0LVwi2omromZN/i[K?m@E' );
define( 'LOGGED_IN_KEY',    '*]CMv??ylh^sUS9iIpt5//` }7N|z}aOyN:L1f {n?d6)FZ^ss $)svA_BWI@RVu' );
define( 'NONCE_KEY',        'C2%ssQsy+q(67a;K4^Gx!Pj.CWwsg[dkL-}:oRQRCC$J;p^sR*WEBoh7$kFxQv#1' );
define( 'AUTH_SALT',        '|U^Flq4J]@kUsmn@Nw-jrK7tSgVT!<HC-Wr0pmNQVxeEUl1PemM/S&!KZlV?!EH1' );
define( 'SECURE_AUTH_SALT', 'V@X)v1=E*Hal?.&mt;G={n`8tWD GXhi+B.(LT;_rR=km7#;P0s/}&xjwp< wd4u' );
define( 'LOGGED_IN_SALT',   'Lu=~VzOZ3`nW_votNB>g,dH<Z#@Q9LY!4KIb@lS,to0J[geUd*Lm7YtzUTf8.daI' );
define( 'NONCE_SALT',       'MLAwy`b>z}sokWNk]FYYEi2[r}Zz3n-Y(+CgmS,%h;@/{D#cm?|$K2R4&R4XZ:G%' );

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
$table_prefix = 'jounal_';

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
