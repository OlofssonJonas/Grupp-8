<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'Grupp-8' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '0NaMTH1QajT:l,fXOk.[*LNnW),gc@xSs4ExuCA`X7EWg=Yt@lOr|Q]q{_5;!vnH' );
define( 'SECURE_AUTH_KEY',  '?|^)0qBSsiH}ZN:(hZksEjV=Z5EJ;k/E]1uL^FgagXp#0L}=1dHI)Gg7HJ1/|EA*' );
define( 'LOGGED_IN_KEY',    'Kn}C&_DEXf(3P^%QXJ!eT(F{;/S^D7PDA{SoKrAn<hRPzE4]]CEX,lS_^*,JKuUq' );
define( 'NONCE_KEY',        'p6)T@Y`a>+NBo9Fw/yA||+?XW^*7f UC=N/oqlQCG%Qe1t&rjWtM%f~3#[2202/{' );
define( 'AUTH_SALT',        ':H-T|Xaf,Snhw?fpfy~fQ*#K*c27}QW3v;{I)tFUP,%R}3UL:GSZy|*ZBW]Tk<Qs' );
define( 'SECURE_AUTH_SALT', 'nr$1QY^/~E:tVW&~ER_=ca2%!CHxDz1Go  TgbRNNK=J29#e4mP6VWXLl1c&2T*a' );
define( 'LOGGED_IN_SALT',   '0<FV1PWx;mN<:>oR7fx0oA8}S8w,1lVzy?0SHt_2Hfs]a&pSd@Ipn}n[q}g]d5AQ' );
define( 'NONCE_SALT',       'kdwh`&]&Xy>e4#1+>1[-fd74+hklVM}U@kv,*&.F*QSZI>Yir)eJ}38~r=UQOn5@' );

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
