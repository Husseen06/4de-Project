<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'hopla' );

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
define( 'AUTH_KEY',         '5X-Au*di{NXI1,KNA#s0;.66%R1!s!}1Zp|,Y+s7>=8/dKK:s%7w1e^mmht<1<e:' );
define( 'SECURE_AUTH_KEY',  's=g>C/h]S88 c7&LGh]4?Rf 3(v| *hb&7rjI[;-9W-tf&<O%<l8GF_I.QCSu :v' );
define( 'LOGGED_IN_KEY',    '!YVO,<1<k-D=I!|ab/(`w,^=3w8VfYc:o>wsc^FAcWx1-Cy?^;v:h{bz)chk|E9*' );
define( 'NONCE_KEY',        '42#.<xPAb+_5:VS:xas}]gjuqR@KZDn-;#Q1{sj#/D49BMF^*Ct7tbs3qpYnG@g>' );
define( 'AUTH_SALT',        'UmT(c ap5d&Z+WMvS]A^MVgVK<&Aab9~~:EbHg]Fe8p,y6uD@QeleYDa^?o$ZzV7' );
define( 'SECURE_AUTH_SALT', '2LCG06ZqymDM46q*#9=%%QQpgvk4(1&9:j=(rq5`]Wye]>~ixVOk5$:Nq_%T%4vV' );
define( 'LOGGED_IN_SALT',   '|peIC#$smzCvI;,)bo%<{nYyA!j*E{zc dwAMP+MQqI]SU-.qn@A[Mbxq&r2Z_mH' );
define( 'NONCE_SALT',       '_%Lre;Z3ytX^k# JEI3_Px_Hp].h2 ^BO+S2)<,>`|,B,(?6xn08)~$-*h%tp0wb' );

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
