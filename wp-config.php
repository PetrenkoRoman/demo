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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'homestead' );

/** Database username */
define( 'DB_USER', 'homestead' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

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
define( 'AUTH_KEY',         'f)8NFte_(bmL!oherAigSO+sC38<vQ!88g~zgqA[nF!bq r!%V1m4Yw5w3nD*.^O' );
define( 'SECURE_AUTH_KEY',  '>l6a,l^DvIqajE7<V@aT_N_96`. ^=Yt3e0XrWL.b^a($cr%v%1f,HWbE9?Q{c<-' );
define( 'LOGGED_IN_KEY',    ':M0A Su<H~vti#3?8YzcK~DV,aH..I]a>E),lu|G#ae5yH_j8cOv$!5Xi*I6|Bua' );
define( 'NONCE_KEY',        'ta#R/ k*-g#@jy(MtzwdRm[+}ue F!q*p+V>eH~R&=z&KNep ugS418osa,F`l{^' );
define( 'AUTH_SALT',        '+NaZh?Y)Bs0f<xwG+1an_{afRnNO>+)~J2msYXpm_n6*AbmV]AYR&si5nWJ,:Wt}' );
define( 'SECURE_AUTH_SALT', 'PR0GB`+>[ee?roB+-Av*+gENbyjC4a~42qaBL!i=W5mZGqU5|QY1lxC x-noC*Q7' );
define( 'LOGGED_IN_SALT',   '>U<J4)v)<cva[(/oXKT63Y*]-th[P,Q~YFtJ$]<(S|_YINhA3L-^hF*ynB$~QHec' );
define( 'NONCE_SALT',       'dxfHx6RPTkk*Ja)qz|IK~):RZ;|7u2XN{{j:hDg$-KFS}KGHIae-C(R5Ib(x9c~M' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
