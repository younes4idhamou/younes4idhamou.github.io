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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'J@ot`+Grs|,wGZJ$EVT=BCD>^ `mZorXllQlQJKLc622~AxUQs+,#dCz0b,h{(<)' );
define( 'SECURE_AUTH_KEY',  '*f_Zu zLN61bR:j=cFJfNAe:DNsPXRwG. [@PEK^Wn^zGg=pOUVDrNd?:X/Ol7~+' );
define( 'LOGGED_IN_KEY',    'nRY;>B>jaXJX{) :=+NvBDMF3/=s`qi66n}YN+_ZS((X+Sz6ExVX 7%m%^8H;oj,' );
define( 'NONCE_KEY',        'i/VF#[o%mQ!8Zdj*tR}UI%H5lMVldM:/Fi@jqMm<)$j~n@Jl~4z;5T]ja ^NtmF5' );
define( 'AUTH_SALT',        'NnAL Xr7m.3}y^a3w SXk<?|QAYEX6E*a5s;*Mqgv3yf,B]1ejqS8/$.7g?mSMJ9' );
define( 'SECURE_AUTH_SALT', 'a!+S}|RSP%,8ig&_Ct0|p:BnV}x2f8Z{[#dHlY>YXn6:@w}86%MMPXVg]`>IW:`C' );
define( 'LOGGED_IN_SALT',   'a3q7dK3o>CN:x(y&%Z4%eesd9Ys&OZJf(cw#9.l[U4cy:vJ];@[NG:Nyon~_3G*|' );
define( 'NONCE_SALT',       '_dl:hY^{XueMzu_+H-~)%U<Xlkh5@oVnCBd=~P-F}^+HbkN]xFkX~+ku7S.o@:Wl' );

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
