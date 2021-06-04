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
define( 'DB_NAME', 'wordpress_demo' );

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
define( 'AUTH_KEY',         '}YC!v&}07<2W9|ebiKD%Pn^r q6ak TEfU(.H/h2SWHuz@J ]mPF@qo1 oHouuCM' );
define( 'SECURE_AUTH_KEY',  'N&ZDxw{cV7V}9;<_uf5j%LW+o(cs8jO.~jx83P%.Ryt2%<rI&TBsh_P;ieUtCO!v' );
define( 'LOGGED_IN_KEY',    '8.W@hNa8~`R~A^r$2GZ(!=|2)`CGD#_M~Xq<OBy3eF9S}aq`Rxj!I#S@E+#KN$CX' );
define( 'NONCE_KEY',        'U+S.4#oCA8~J~Fh(X>I3(.);1m!YRl>P}bP;n(niwoJq@:F_g1jX=RHECf[Ko^2>' );
define( 'AUTH_SALT',        'Q34)1JW]:*k@^ZtQc2*K`n6w#;!vjY1B4-HS@/;1QKGaiEi4Jn-GUEga~~KfSya$' );
define( 'SECURE_AUTH_SALT', '7R:{0qw!S6ibf8, {2h=X.mgN*Q/%]0b68aBbBQ4Rj_octnf]bQwTP|*o*w4BX`!' );
define( 'LOGGED_IN_SALT',   'TAUC&k><4eqwWH]#$??[@sG;wz79iT1q`{vwdV*E@D%Lq+sPkgY@4d*N@]`b[5cp' );
define( 'NONCE_SALT',       'BeWqJ0]ZI&]Ya=|md)Gd#KM ]akcLzM<htUk`[HX(FiJ=^vdKMP3RFUrdlrH0>b/' );

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
