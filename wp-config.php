<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

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
define( 'DB_NAME', 'shareiva_db' );

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
define( 'AUTH_KEY',         ']Z1%>7unp!|c]~`Z7OiqS+:C?VH[-S)&S0rE(9z:$;7FeHOv/:]qsX0Odl{0@(KD' );
define( 'SECURE_AUTH_KEY',  'h,Va,!S?~8S,T$%U2y*dyl3ZFu/T. 8`VG^+|rfOX9J)Y<`XFR+Z<`LoHiO}%dw7' );
define( 'LOGGED_IN_KEY',    'E$}V!,MU}tl(j:V,cKz7|D6:wgr=VHzrkt]&~bc,/#M&h!PkfG+5vc+{]Tu|B9ZG' );
define( 'NONCE_KEY',        'f%E?c|LdHtU{?.lnQdjTb EkDnT 6DnsSk!8sR,vz9U}N,qBBZtx|Ddjot-&NIkc' );
define( 'AUTH_SALT',        'G2.>D,?}y5 Hs=&k]X~q>*RGIQ&3$`CiN/2/a.}=2@9qDOE|d#u+0Qw1pV#3,)%4' );
define( 'SECURE_AUTH_SALT', '}Xgejf8}Q~7?RAA5 Tc.%H>_Q}Y@5;fU^E.yI,Ba1/S>?%s%]1URfJD^6<(O3O d' );
define( 'LOGGED_IN_SALT',   '-bU>3]qk8;:P8ew#R++#xG$e5b#TrNWv_aoh<8%.DKw9)^F+.V:D}nfMd3Mkrh?)' );
define( 'NONCE_SALT',       'N/eAegu<0? _x+Yn|f{vU?kdvG?R<[IW#VZH-gK+0NEG+6U P%qd{F0mD5w~+#DM' );

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
