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
define( 'DB_NAME', 'sos_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'j0uLqmBs0G#Q9iu}D1uE&hg7:N]_}L?v&kUGuUMwCYL$Smw6~=QAlVY$w5< ]_:q' );
define( 'SECURE_AUTH_KEY',  'txhD}wia6ba;8L5[Pr1u_jelw+Skj[0pr1jjY:C-U{FJ>uWM`mqb2dFrN/)q,(iX' );
define( 'LOGGED_IN_KEY',    'G29BnIcG{mrNDRs*sdy;|9t!QK%v/|P_A_z%?FTKa~te;hi5 =#OMYJcf<B8F^>j' );
define( 'NONCE_KEY',        't1iN.{>0Sgj~;Gb<;OW! 97),~-:sEA#law1!YQ?X~,ezOwl3xOcCGNP`7;e`^_G' );
define( 'AUTH_SALT',        '(at{t J(SP4S<%B3G=f.c*T@y44j.PZ*a[ZK*_hjdT6{1sH9jC*nroCp=HtSB~+m' );
define( 'SECURE_AUTH_SALT', 'JXs?{?V*?-.Ado}iL@t*@|-aiBp5[9?g7NE~8Nnaa*w+^*:=Ma;pDRjbspGd_zJZ' );
define( 'LOGGED_IN_SALT',   'v@mN9aT|/@*.M_H7od&x:uH!890v[v!gj]vk, ]1KWu9b;+)JWX!4])(06+iLj1+' );
define( 'NONCE_SALT',       'f~jFV)QaOC3UkEolxV]w<5(s%H|5KqBJ=;W)gp)p-)Kh#msw<1Y{-}lxUYXyUW}X' );

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
