<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u472045040_8Bqnw' );

/** Database username */
define( 'DB_USER', 'u472045040_uzCH1' );

/** Database password */
define( 'DB_PASSWORD', '3367dA46NX' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'V}d=vtPluN$p.|D/^5|QIfe`uB9P]T.{X;R8L#&CO_/.bE%MatK!q4ZR0DP>as9s' );
define( 'SECURE_AUTH_KEY',   'qKxlaIut#Le%z^x[tj32(x.PGs,P/jxSq%/Y0@I*Yn63@]J&SyifmovZk{l#[n_N' );
define( 'LOGGED_IN_KEY',     'mG{yMw`6([z9Cx}fJFwQKVYPL]rtu-J(9HkO8M7!ACXiOs7!<+ntB8wR$G5x/alF' );
define( 'NONCE_KEY',         '6qf%`?.Y[$aFY5{eOr&P+c}EG7.JA,,Ty_b*6d2a&Y3Ly(U(<7E2EsGE8m{*j/W|' );
define( 'AUTH_SALT',         '#CCeCVc%G<uoIaGO bRpEG_tb,hK,PWM,1rpYn2<~IT8neyszcev!GBT*?_5lp<#' );
define( 'SECURE_AUTH_SALT',  'K2]<;gGf!t@F$wJ?f&c3sprJ?lBL13-A#dv)rr!$*E&rYIhiEC<<suJ=yGty/kz:' );
define( 'LOGGED_IN_SALT',    'k&s9a<q}7}>W&wKy4E!Yy(Xhvilw31&39L3.?N9vMnI6s|Nz,W$cr%J[><)3]~(`' );
define( 'NONCE_SALT',        'DfO$FR+%lyV)*>8kfuIPR7YH9P{RuioSy`CMW;$[^FBO:~!I{adl=v&WWn9@geC]' );
define( 'WP_CACHE_KEY_SALT', 'hoj7S0JGb-7`#)M:_Sr=:Z._+U;a|e4u{Q~_b:9$LYiRG=WM=GA|F~`OVeGR4,oV' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
