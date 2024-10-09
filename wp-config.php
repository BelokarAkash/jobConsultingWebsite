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
define( 'DB_NAME', 'wordpress_demo' );

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
define( 'AUTH_KEY',         'VwH]F!$-&38|-3kk4_k|6e8E8?4PKdAKOL-f/%dXrV$iBAUQ%KA1cQtc$62)TOVZ' );
define( 'SECURE_AUTH_KEY',  '=%2>y=$87[SkX[fUF#Z%=!`t*tUy:&a(U9V*h7p|x*i1&k?JW5qC3=:e23=PIX/,' );
define( 'LOGGED_IN_KEY',    '`26Mf(J}LdOZB}m(Z6G<:YT`4qJ3_QXXmPy2Z9WT.|Wv{.;[vL2PKED@~)s4K$QZ' );
define( 'NONCE_KEY',        'X>DzLFQFRia;)n7I%F10J_N4X;(7|*Y)C9I~r&)HR192SuW6!zuK,l7gs[6GMv8.' );
define( 'AUTH_SALT',        '9)m46Xs6p=5l[*G|Mn5x[<t{eiPfe@6gY/+cM^`Lw4`zl6sO_XnW/iS`sp3f+~,O' );
define( 'SECURE_AUTH_SALT', 'NzqRO:k:uJ+&!UX-9Zm=f]8AOZR^dauhMv=G]J>BnO#.}RXF$[u6-zYsJ@o^2a]X' );
define( 'LOGGED_IN_SALT',   'Pc.tL3+M)8w#+W7enPPD+)pyus-uYi<@*MZJL_KEIs{s70M_ Ni^.Z!qe)LHkHDx' );
define( 'NONCE_SALT',       ']F=D5iJE-2as]s?%wV5m7<K>z{$-I2#AZRIYQKpDis(Vqkq+p:U~VL23r]XFT=rt' );

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



define( 'DUPLICATOR_AUTH_KEY', '[u>R^,~BgP:nm([?ap-~:f=Ld4!]daW_ypCYr8AT>(u]!t#[2c?arA2hGLrMF:w4' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
