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
define( 'AUTH_KEY',          '8wyeuHY>R:1ttIMD4mQ`wf~/f}?sYzl{V%Sojj4e}^6iyz$~+kUJ>IE[,&,y rX-' );
define( 'SECURE_AUTH_KEY',   '{2@;j%[rPLt#Nf+$%+MGQg?)o0# fH(U9:.-YSV`Wy]-ojBo8|H([DSb0z T.l%w' );
define( 'LOGGED_IN_KEY',     '?%(q,/Djve~x_!~mI/~x.FBbPPlw$0v@J1.y3$y(<Lwc!@Z~yHEkq31pmZ<&+WAy' );
define( 'NONCE_KEY',         '6<iAfKZ`|f0A2,A/x.]HL)-_434T6!peTV8+Q#9<F/-;cXC:q-<SGNgDXu9poS6}' );
define( 'AUTH_SALT',         'dt{VIN(6-^/X3ZTdgZ}`0atGG,}=#}7At##qs7. uRujoP_V+BJom4J+NK3$kI%m' );
define( 'SECURE_AUTH_SALT',  'YRob2Ztgm69[<e~<0fPB;$OKUy`C4o1D@u;oul=F?+8)njdJCB[+3C5h~`dBMN~C' );
define( 'LOGGED_IN_SALT',    'mOl5qg,z$CKim6yt^?vD1n7*84v&zu9l.d]EtrQ;F(&TniUx]/`;Xy5$GuvX$OH;' );
define( 'NONCE_SALT',        'IK[lr*PTRPO%)h,qE o=@#td=$k4|CeXF8C4O<&q(,4AMZ);T_^Ytq6B!e3]A7v(' );
define( 'WP_CACHE_KEY_SALT', '<C$M@(YPM]8N)`gidH*`QBjAZKSFBO+mw!n=I$JNjo=}_aQ$=-OH-C)x/ok7|vDv' );


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
