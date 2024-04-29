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
define( 'DB_NAME', 'searcengine' );

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
define( 'AUTH_KEY',         'Sh_G=+}M}nY79Fyb4+SY+r>li:Q2w_KX@kY[ZZOK>u~Tog#`jYAE,W>>4?UEKRWM' );
define( 'SECURE_AUTH_KEY',  'uIo/xlBN]2;VCg)8clmj?c5G)v>:/c!M<JC^/Rz*6)8sPv)5j/8gK=6*d9]Li1?[' );
define( 'LOGGED_IN_KEY',    'oy4hefY4syPyF!|qp(?x`c)|$S-J3kc5Meh2]m3efH1Z=OM%bmLGm+`U/<?)GJ$a' );
define( 'NONCE_KEY',        'c_VIwhpE^dq1,S^eP{@zdw6:a<52qpLBs-ve 2Ji`uUYbf!@D~aQEfdpGi/Y4~uK' );
define( 'AUTH_SALT',        'TXtoB86/U|n|^_2XPJcY)mU}*RosfKCH}Srrd0;t)uKNivg{$ZU?IN}[mBDu+aQ8' );
define( 'SECURE_AUTH_SALT', 'K=d@Ysv,@QYQ4[:=%u@9;b_3#BhZ;D2T|8tN`+Itmjg$?p_|f/thbcN5Jl0IJ8M^' );
define( 'LOGGED_IN_SALT',   ')PgLk5Fmhf&(zw)y=9WLe=iIc91$PC_6@ueAAjHl{xFS;2{o*=U}@?2%+-SMc|R=' );
define( 'NONCE_SALT',       'R{M@uYW$!*yau`0|c!jkx.4J<-eBvWL/3];p6Xt_uP9(>z}p*z1[1yZk5CtQgRz+' );

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
