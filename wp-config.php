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
define( 'DB_NAME', 'lawfirm' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '3cRUNob0/#A);;JC~5k)Tpe|JWHav{n|?.P$imkp8e<FiQ/oTH]mN,8y@5j$&za{' );
define( 'SECURE_AUTH_KEY',  '`H|M5x-YtBvTy6[Vn9[yt^C#&0qfpu#(o>L(U%+^C6^Bt18~e}3%/p+V^v$K`1MY' );
define( 'LOGGED_IN_KEY',    'n&o`.9;u!j~g`29sJ&nFC6AhcAJxek2PMkE)=ZQ!R_A|{ag-zTNFw.hBhY+/Zd^C' );
define( 'NONCE_KEY',        'L+LSEe$&7dxaaFQp8B1D#(^}}>Tws>y}I)z]I+FLE:|k(pf,KV>_?iam/qM}YL.c' );
define( 'AUTH_SALT',        'FK:QsiLC?(6E3Pk`kK8{/t(g6b^%H#^pV.>?CdD$n5wd9;XDl&|M_Nm#W7YROq8D' );
define( 'SECURE_AUTH_SALT', 't|@Z8<>aJHD`Apl*@Kp^$kFm7xJT`/jfe7>.lgqQ#W;5:5L`m|~y{pZ}oD7mr)d.' );
define( 'LOGGED_IN_SALT',   'h5@m]Zh10{;<J=J8(w~kXDalBP;MkO}]oLASE|Jt+tL`W?7d]ocD2_]w-o^-Sn(V' );
define( 'NONCE_SALT',       '90cR:9Ou(k6<&jzcMl^Qk$A^1Yod&X,BBs?IB.DMa_Azd*nK&|zZ2FStFbk`i#fo' );

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
