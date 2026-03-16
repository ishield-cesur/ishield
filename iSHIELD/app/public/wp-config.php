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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'gC umkRpU8O.zR=w~= of!Z]q[m`RR^58]>RKu[{]W 2LOP%!agQ0:I@`8t-A;u<' );
define( 'SECURE_AUTH_KEY',   '.yN<J!Kb?T+4b*~/:sd;J6jmb4/<O3HeLHR+d1P#1b(q6e+{YBI6/D4L+aX~YA3q' );
define( 'LOGGED_IN_KEY',     '*!Bf6cs-_ak-53<J$>$v=sY}>iU]/:3-B9:y|a,^[#h9}Etoy^kW$`z8{RJkL6!l' );
define( 'NONCE_KEY',         'j:ch+=6XkkWCn4&T]Lb%{Y91B :cd$yC_^arO#(CRdfr6)}^=LOvhK(EG3m Pz}(' );
define( 'AUTH_SALT',         '6.<$Q0LHS52Y)QCK>o$y9`8B8-/7ZO,vzLiDbD~A:+-ZWaXAh&EGejk~^SKpZ;U<' );
define( 'SECURE_AUTH_SALT',  ' :!yC#f* 52e6Tb!K@kd`hgKlSeIvzoe`<:~39A}at/t~:11VO?$ Wc*~VR`Vk~{' );
define( 'LOGGED_IN_SALT',    '/E64L0} lN?}P|q!F;G`ij]s~J<%:?v8}u+;HyKgG(~UNp;lldu?<~VPp[`R@Woo' );
define( 'NONCE_SALT',        'YQyRG|%CHToxzDP9;1}}$Hq`iMYL,j]0iF] v6dnIt~~1tDpiLm<u}x=*BxwQ-V5' );
define( 'WP_CACHE_KEY_SALT', '!<Rwc+S7#sByv+-]dKRdZn4{Z+Dt5ARbO|1zO3L+^!1?{KC_|e1ch!-8S{&L:;G]' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
