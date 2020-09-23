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
define( 'AUTH_KEY',         '&!kTHNKnm<c%>f~yh{hP/suPElYRF^L#Ury{nILuo,e-*[do>Nwb.2oT,,e-Rb91' );
define( 'SECURE_AUTH_KEY',  '2/n6&bw(z>@+>3@|Wy%js/?8*I2bu!BhYzvb{_`V>: M1eH.2JKflV+E?WLI2p%E' );
define( 'LOGGED_IN_KEY',    'KS5fy!f[-|[qor$>/Hp9|tku&v;Bi/k,P-Q$vCf*sMjS{2luQEpE0uG6tn%=XxN7' );
define( 'NONCE_KEY',        '&ukoEExx+z`ESma#;~zumdbXN2<]PI4x`r$s5+M+Xwvm5hty!u=DkhQgk|i#<SFT' );
define( 'AUTH_SALT',        './:ypAaut1/u:$ExW?a--`R=<?76D,jE3o$Cu`!+w?fJa0$BQu?;s7A##VUr!YfK' );
define( 'SECURE_AUTH_SALT', 'vsn@S8_kP*vI&cb%C7mXzZgihs#V!^/lb7RF/dN_,PdBA!0k<<!I9_}O:3MX@pZ ' );
define( 'LOGGED_IN_SALT',   '=TN_jpaVWz][+XXe2RJjn4^d[#OT`%FBVmPOOwjQDE^Rk|+zPWPgWb;1e;6 qt8f' );
define( 'NONCE_SALT',       'rTr$xp:H 9F9[)nUi~hVrp#$(=V56zga[5VWh6h8)2t1fyjK}!3BfO{6gZrY6(&5' );

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
