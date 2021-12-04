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
define( 'AUTH_KEY',         'uL^)=qHdZIfY}9s]D,}YL6$Jza&XWxCm`=gx2xA6|4%i8*u2(echr?A6T>gw`{%a' );
define( 'SECURE_AUTH_KEY',  '{&Q_x,r0^h;dQ}T`+V_;I^>}</md%4kMK?Q;OF/SN(n[^}@mky_cl!5;yKrn*]]3' );
define( 'LOGGED_IN_KEY',    'fTNka{+-3*MqgX3}$p?J4=o.!(=K:6GRS<Vs$fE5:Jig(%AZES3IUTl&c~Jm)u,.' );
define( 'NONCE_KEY',        'B %*{G@YhX|0N!&-T&~NjzcoS|j?N.h{7bS1J]79F;8%,YiF^JOrycKRVE/nZ,[i' );
define( 'AUTH_SALT',        'D.{){Ww.$Z-8Mxp#M92h{wYANr__Ad4V= l(JiC|j,PPa-O+rFoBcg~eTDi%V-c=' );
define( 'SECURE_AUTH_SALT', 'Zl:uNGHj^)0Ci-3JHN7RXvlog]Q0m(h!CJGiZf6D;-JC^b[ @7z<lyto,Q&!o.zX' );
define( 'LOGGED_IN_SALT',   'lp`YR9m.n-js_~HtW`2#^d~kHrjIoB-[I@fpo@47uy5-ZCEA@d/+[H`$kTuLVg.J' );
define( 'NONCE_SALT',       'o2/Npw1jk{@nLo2RC|UY*8uBI.7KlpImm;,/#DzBaTJ:;6>nOxnRI#8@R(*97oP/' );

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
