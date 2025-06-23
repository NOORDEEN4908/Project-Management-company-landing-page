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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'learn' );

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
define( 'AUTH_KEY',         'FNFRHpBdy6ri-Q%@/ipD}h.d{ju&cw+Y+4UcL1@M9k{}2TilF|dq$I.7:c`FsiZO' );
define( 'SECURE_AUTH_KEY',  'Z@pK([}Pfy36y)%[`9xEGdU<-%qle`W`~W-aACfR*y#/c9JZU.&BkDtl;zbIX&:<' );
define( 'LOGGED_IN_KEY',    '~zmSDO-~c]-{XW6Oo:Is<WnV=9/|L2JX)&LD!?HG52$>_)``g=*@NiKc0:uLi3]b' );
define( 'NONCE_KEY',        '0X5QU7A4Lshq<AAZpc_PMYZ8L9^vo116EboHK>-2zFfC{DOh+%%S,}?Qle 6IAn}' );
define( 'AUTH_SALT',        'mpXm1?<c{F3x?}BqYL;OL76,;Qhw?`K>e?VMc=KV/1Nrx91enF[| #(3I,&uynf$' );
define( 'SECURE_AUTH_SALT', '7{<TCP#[:EfJ(fB]2,34Wf^<$A`jswT6|@;/=Gi[76Zig]$;!<b?9zo?;h*#Rf!h' );
define( 'LOGGED_IN_SALT',   'ztrzJ%>A19HuNwQBW=m%D0MKnU6]+5hvKQbc7}RqYLrrAUU-_8VE(lAU^ABs63Ur' );
define( 'NONCE_SALT',       'dPE5$+.UZ8.wN:Yi*mHsdDW)FO}hic1EE63* AfanE_wmX*D*%U6)BDUbR0!Bi3b' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
