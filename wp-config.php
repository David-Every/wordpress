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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ';GmZJeqE@B`V9eBwiGPHd}qH3Yy$P<u,[b|`Pxt?xWIpri3-TK/bZp:~!$<l|w/k' );
define( 'SECURE_AUTH_KEY',  '?0S(Foy((G_|X7 BK^R}RG3#j:x8, oL|k)0V>?ED1r),1Er~}4Qb5;&.LPCR2ct' );
define( 'LOGGED_IN_KEY',    'fjR=?UZ^JFtoNK}A<53$_ngoaJz<jLaQt)SbF#L(+=sBM()9N/+c>}Zr=lz8|7z8' );
define( 'NONCE_KEY',        '-`/,pJi@< :@l2-{1!+i,^VIiwnvzgMYhJ9</AI-*%!&7_h8v*VHr>%M`v})7PfI' );
define( 'AUTH_SALT',        'ra4_=AY9UjGHH(GRZz,u</?/O#p~ag{2Vyn+,FVw@wINg^gjUVwP{u81=>4&VW9X' );
define( 'SECURE_AUTH_SALT', 'ODKMD69}5]S7Sx.M;Ds|Bu8:p-GpZ.i~wEQoU{fj/bUIc=E.nl@oH@!U /wCJ86W' );
define( 'LOGGED_IN_SALT',   '(?8wjM#zST6[8m*u*Y?~m,xf%b(HQWML@_zEC._!Y>`oo^8,3mug9Du9=FRB3|Zo' );
define( 'NONCE_SALT',       '?$(L|hpc/53?ushL~9Z>xnxQmup<2l$XyEc2E+w)&2rh_WcFYwp+D.0NZiy}jMD;' );

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
