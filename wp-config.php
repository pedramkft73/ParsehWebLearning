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
define( 'DB_NAME', 'parsehshop' );

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
define( 'AUTH_KEY',         '}K<p9XKO<PeFe@r)@zPSkl<p)ZMsVvHJDYh(A{_-Wt!<eZY2r~G<A^woaU4l+&VO' );
define( 'SECURE_AUTH_KEY',  'eF#*ysk&bNi[KJrGFy}O4oi;feYdATI=qf.YUkQ*{K m~wnRHqs3K02$F-m%y=e[' );
define( 'LOGGED_IN_KEY',    'Y8%dta]]fJun4-ANq@?wJ L9lYe*MM=1Z@N;},JtbSRnu#SRUh~Yshp{o!Ptw(h;' );
define( 'NONCE_KEY',        '!*1jxfdhk?wuO4+7,&&`V,>y0TF3_Qpv2+({;,)R~{$T@iKcR:&](v)Pj@)(0|7G' );
define( 'AUTH_SALT',        '980-[v<Y#7Fxhsi;!-7l>&#:Mb`-r&RTd6R7~V2)!Cf/V!N#Pjos?c/U/S.:zW*T' );
define( 'SECURE_AUTH_SALT', 'UQkxEoK_)%C2!7sh~r~jc^3|/|ArtlZ>?+5 t~o*M-h{`Hn[st`~Zub^}l1|j|3;' );
define( 'LOGGED_IN_SALT',   'i ^_>2[BtA[c(9ScC~A{]8=^cd)w|)WXO!,!!D&vaJ+CQ[g6qYqeXIo,{K}2k8^1' );
define( 'NONCE_SALT',       'h6k&e_XbxxbqhWL?}V/?k}v~fb#f&Lzk]oY~f|mv$A;Rm;&$&p3E/*l/Z3oqoV]+' );

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
