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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '[!f&h/fkAPI@sx6qasitGWuu*#Y[U*!fa[4S[:FHy1*}O8uHb>67/2%`nTY#{-3C' );
define( 'SECURE_AUTH_KEY',  ' 9[PP=9H<GF%-S.AcQ4hQ4gsNVgdh$u~q,JV(T1hd+*-xO iHZ|7 e=mYNdo=r/I' );
define( 'LOGGED_IN_KEY',    'MZD=;ah0EjOLbF6/s3psI8s5NWM~AJ4waKf7dpJRJ,HbQCwwQ1we0vP6Ne4`V=nP' );
define( 'NONCE_KEY',        '5y_;P EarlWh5>--FS`+DT6{-AV;X-#DIo+(!+~?O:*#Bbk{tpg@kAu/nHYaa^-`' );
define( 'AUTH_SALT',        '93YquuV13k*gW#_[w-B=oMaA|[B_w-s/FAC0/SyXMn>|T0MxY;Vsdlya_/skR,r~' );
define( 'SECURE_AUTH_SALT', '~~L7g=97|^4@oaFOEP>Ri@PJ3#U/#4Y7~]+#Fg2jp]Dy-->>$Y[[+Z5uqC%WL4DI' );
define( 'LOGGED_IN_SALT',   'n aT/bJHSwow*t<-Y`88P=8BF~by*(+FX ri0/Vj;B2@Kh99:SfN#~PyDG03O)hf' );
define( 'NONCE_SALT',       'E Yy^Olr4An-%Q4FvznFW64p0&Oa zq&ngJ|;HR;c| %7_DsSmh;0n2=CYh3^$`z' );
define('FS_METHOD', 'direct');
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

