<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'mkz.Q1k^+L h@bL]l(n{>o53cES?{K0o>gP?Z=W^S:<=9M,mI`$LnnO?$k,Y#lrn' );
define( 'SECURE_AUTH_KEY',  '$YnUCY!1%usP&:+_+RLV%:>]^?.74>*-,c,|`Ru>f<|T6ptF1E-W[IW{=</^XcAf' );
define( 'LOGGED_IN_KEY',    'HjC;RbR%saM>,ZW%q_-sZ&V:fCQ%zv~_!kuT0]<*!/#L|^=B#r$8!t24Zp;6{u2;' );
define( 'NONCE_KEY',        '*3%|2Pj2 Lzhj1(}]Y|47~?VJHaRHjuXzqDGv.}sP(;;mc;4={&oX41>F`x2%Z W' );
define( 'AUTH_SALT',        'v~PfR%r&MJmhv@:L67p}eqt%ZqCX9j{6j)9n.2wI$S<gjlLbaRZ!dI6hr]{fMb7x' );
define( 'SECURE_AUTH_SALT', 'rI/5]Cr),[zX C;!&:k@m}(*d=hCdkOhP^8^5bUa`JO*@s(xMznffKj|k*mqQwyh' );
define( 'LOGGED_IN_SALT',   '4vm/.iDn0VO:z.;r/CIG)fg>sn#<f5_zw]k+#F]te)pTZ/Qi-R=4r5;@p2p/+Ml3' );
define( 'NONCE_SALT',       '$;CRyhGUCd[8kEU{p2eKm-?16/q}Kj7ybUUf;TQE)HJ$rFhy(b(4HYM.$[=A~VYx' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
